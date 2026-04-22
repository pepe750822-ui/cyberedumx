import { createClient } from '@supabase/supabase-js';

export const config = {
  runtime: 'edge',
};

export default async function handler(req: Request) {
  if (req.method !== 'POST') {
    return new Response(JSON.stringify({ error: 'Método no permitido' }), { status: 405 });
  }

  try {
    const { userId, linkingCode } = await req.json();

    if (!userId || !linkingCode) {
      return new Response(JSON.stringify({ error: 'Faltan datos requeridos' }), { status: 400 });
    }

    const SUPABASE_URL = process.env.VITE_SUPABASE_URL;
    const SUPABASE_KEY = process.env.SUPABASE_SERVICE_ROLE_KEY;

    const supabase = createClient(SUPABASE_URL!, SUPABASE_KEY!, {
      auth: { persistSession: false }
    });

    // 1. Buscar si el código existe y es válido
    const { data: telegramUser, error: findError } = await supabase
      .from('telegram_users')
      .select('*')
      .eq('linking_code', linkingCode.trim().toUpperCase())
      .single();

    if (findError || !telegramUser) {
      return new Response(JSON.stringify({ error: 'Código de vinculación inválido o expirado' }), { status: 404 });
    }

    // 2. Vincular el chat_id con el user_id de la web
    const { error: updateError } = await supabase
      .from('telegram_users')
      .update({
        user_id: userId,
        linking_code: null, // Limpiar el código usado
        linked_at: new Date().toISOString()
      })
      .eq('chat_id', telegramUser.chat_id);

    if (updateError) {
      throw updateError;
    }

    return new Response(JSON.stringify({ 
      success: true, 
      message: '¡Bot de Telegram vinculado con éxito!',
      chat_id: telegramUser.chat_id
    }), { 
      status: 200,
      headers: { 'Content-Type': 'application/json' }
    });

  } catch (error: any) {
    console.error('Error en vinculación Telegram:', error);
    return new Response(JSON.stringify({ error: error.message }), { status: 500 });
  }
}
