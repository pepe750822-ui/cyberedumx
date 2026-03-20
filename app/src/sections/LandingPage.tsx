import { useState } from 'react';
import { motion } from 'framer-motion';
import { 
  BookOpen, Calculator, Leaf, Zap, FlaskConical, 
  PenTool, FunctionSquare, Landmark, Globe, Map, Scale,
  ChevronRight, Sparkles, Target, TrendingUp, Award
} from 'lucide-react';
import { Button } from '@/components/ui/button';
import { useCountdown } from '@/hooks/useCountdown';
import { subjects } from '@/data/subjects';

interface LandingPageProps {
  onStart: () => void;
}

const subjectIcons: Record<string, React.ElementType> = {
  'BookOpen': BookOpen,
  'Calculator': Calculator,
  'Leaf': Leaf,
  'Zap': Zap,
  'FlaskConical': FlaskConical,
  'PenTool': PenTool,
  'FunctionSquare': FunctionSquare,
  'Landmark': Landmark,
  'Globe': Globe,
  'Map': Map,
  'Scale': Scale
};

export function LandingPage({ onStart }: LandingPageProps) {
  const examDate = new Date('2026-06-13T09:00:00');
  const { days, hours, minutes, seconds } = useCountdown(examDate);
  const [hoveredSubject, setHoveredSubject] = useState<string | null>(null);

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900">
      {/* Navbar */}
      <nav className="fixed top-0 left-0 right-0 z-50 bg-slate-900/80 backdrop-blur-md border-b border-white/10">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <div className="flex items-center gap-2">
              <div className="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center">
                <Sparkles className="w-6 h-6 text-white" />
              </div>
              <span className="text-xl font-bold text-white">ECOEMS Pro 2026</span>
            </div>
            <Button 
              onClick={onStart}
              className="bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-semibold px-6"
            >
              Comenzar Ahora
              <ChevronRight className="w-4 h-4 ml-2" />
            </Button>
          </div>
        </div>
      </nav>

      {/* Hero Section */}
      <section className="pt-32 pb-20 px-4">
        <div className="max-w-7xl mx-auto">
          <div className="text-center mb-16">
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6 }}
            >
              <span className="inline-block px-4 py-2 bg-blue-500/20 text-blue-300 rounded-full text-sm font-medium mb-6 border border-blue-500/30">
                <Sparkles className="w-4 h-4 inline mr-2" />
                Basado en la guía oficial 2025
              </span>
            </motion.div>

            <motion.h1
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.1 }}
              className="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight"
            >
              Tu plan de estudio{' '}
              <span className="bg-gradient-to-r from-blue-400 via-cyan-400 to-teal-400 bg-clip-text text-transparent">
                personalizado
              </span>{' '}
              e inteligente
            </motion.h1>

            <motion.p
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.2 }}
              className="text-xl text-slate-300 max-w-3xl mx-auto mb-8"
            >
              Prepara tu ingreso a la UNAM e IPN con la herramienta más completa. 
              Flashcards, simulacros, análisis de desempeño y mucho más.
            </motion.p>

            <motion.div
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6, delay: 0.3 }}
              className="flex flex-col sm:flex-row gap-4 justify-center"
            >
              <Button 
                onClick={onStart}
                size="lg"
                className="bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-semibold px-8 py-6 text-lg rounded-xl"
              >
                <Target className="w-5 h-5 mr-2" />
                Comenzar Mi Preparación
              </Button>
              <Button 
                variant="outline"
                size="lg"
                className="border-white/20 text-white hover:bg-white/10 px-8 py-6 text-lg rounded-xl"
              >
                <TrendingUp className="w-5 h-5 mr-2" />
                Ver Demo
              </Button>
            </motion.div>
          </div>

          {/* Countdown */}
          <motion.div
            initial={{ opacity: 0, scale: 0.95 }}
            animate={{ opacity: 1, scale: 1 }}
            transition={{ duration: 0.6, delay: 0.4 }}
            className="max-w-4xl mx-auto"
          >
            <div className="bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-xl rounded-3xl p-8 border border-white/10">
              <p className="text-center text-slate-300 mb-6 text-lg">
                Tiempo restante para el examen ECOEMS 2026
              </p>
              <div className="grid grid-cols-4 gap-4 md:gap-8">
                <div className="text-center">
                  <div className="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-4 md:p-6 mb-2">
                    <span className="text-3xl md:text-5xl font-bold text-white">{days}</span>
                  </div>
                  <span className="text-slate-400 text-sm md:text-base">Días</span>
                </div>
                <div className="text-center">
                  <div className="bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl p-4 md:p-6 mb-2">
                    <span className="text-3xl md:text-5xl font-bold text-white">{hours.toString().padStart(2, '0')}</span>
                  </div>
                  <span className="text-slate-400 text-sm md:text-base">Horas</span>
                </div>
                <div className="text-center">
                  <div className="bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl p-4 md:p-6 mb-2">
                    <span className="text-3xl md:text-5xl font-bold text-white">{minutes.toString().padStart(2, '0')}</span>
                  </div>
                  <span className="text-slate-400 text-sm md:text-base">Minutos</span>
                </div>
                <div className="text-center">
                  <div className="bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl p-4 md:p-6 mb-2">
                    <span className="text-3xl md:text-5xl font-bold text-white">{seconds.toString().padStart(2, '0')}</span>
                  </div>
                  <span className="text-slate-400 text-sm md:text-base">Segundos</span>
                </div>
              </div>
              <p className="text-center text-slate-400 mt-6">
                El examen será el <span className="text-white font-semibold">13 de junio de 2026</span>
              </p>
            </div>
          </motion.div>
        </div>
      </section>

      {/* Subjects Map */}
      <section className="py-20 px-4">
        <div className="max-w-7xl mx-auto">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="text-center mb-12"
          >
            <h2 className="text-3xl md:text-4xl font-bold text-white mb-4">
              Las 11 áreas del examen
            </h2>
            <p className="text-slate-400 max-w-2xl mx-auto">
              Contenido completo organizado según la guía oficial del ECOEMS 2025
            </p>
          </motion.div>

          <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            {subjects.map((subject, index) => {
              const Icon = subjectIcons[subject.icon] || BookOpen;
              return (
                <motion.div
                  key={subject.id}
                  initial={{ opacity: 0, y: 20 }}
                  whileInView={{ opacity: 1, y: 0 }}
                  viewport={{ once: true }}
                  transition={{ delay: index * 0.05 }}
                  onMouseEnter={() => setHoveredSubject(subject.id)}
                  onMouseLeave={() => setHoveredSubject(null)}
                  className={`
                    relative p-6 rounded-2xl border transition-all duration-300 cursor-pointer
                    ${hoveredSubject === subject.id 
                      ? 'bg-white/15 border-white/30 scale-105' 
                      : 'bg-white/5 border-white/10 hover:bg-white/10'}
                  `}
                >
                  <div 
                    className="w-12 h-12 rounded-xl flex items-center justify-center mb-4"
                    style={{ backgroundColor: `${subject.color}30` }}
                  >
                    <Icon className="w-6 h-6" style={{ color: subject.color }} />
                  </div>
                  <h3 className="text-white font-semibold mb-2">{subject.name}</h3>
                  <p className="text-slate-400 text-sm">{subject.topics.length} temas</p>
                  
                  {hoveredSubject === subject.id && (
                    <motion.div
                      initial={{ opacity: 0 }}
                      animate={{ opacity: 1 }}
                      className="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-500/20 to-cyan-500/20 -z-10"
                    />
                  )}
                </motion.div>
              );
            })}
          </div>
        </div>
      </section>

      {/* Features */}
      <section className="py-20 px-4 bg-white/5">
        <div className="max-w-7xl mx-auto">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="text-center mb-12"
          >
            <h2 className="text-3xl md:text-4xl font-bold text-white mb-4">
              Todo lo que necesitas para triunfar
            </h2>
          </motion.div>

          <div className="grid md:grid-cols-3 gap-8">
            {[
              {
                icon: Target,
                title: 'Simulacros Realistas',
                description: 'Practica con exámenes que replican el formato oficial del ECOEMS con 128 preguntas.'
              },
              {
                icon: BookOpen,
                title: 'Flashcards Interactivas',
                description: 'Más de 200 tarjetas de estudio con conceptos clave de todas las materias.'
              },
              {
                icon: TrendingUp,
                title: 'Análisis de Desempeño',
                description: 'Gráficas detalladas de tu progreso y predicción de escuelas a las que puedes ingresar.'
              },
              {
                icon: Award,
                title: 'Sistema de Logros',
                description: 'Gana insignias y mantén tu racha de estudio motivado con gamificación.'
              },
              {
                icon: Sparkles,
                title: 'Plan de Estudio Inteligente',
                description: 'Genera planes personalizados según tus materias débiles y tiempo disponible.'
              },
              {
                icon: Zap,
                title: 'Modo Offline',
                description: 'Descarga contenido para estudiar sin conexión a internet.'
              }
            ].map((feature, index) => (
              <motion.div
                key={feature.title}
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ delay: index * 0.1 }}
                className="p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors"
              >
                <div className="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4">
                  <feature.icon className="w-6 h-6 text-white" />
                </div>
                <h3 className="text-xl font-semibold text-white mb-2">{feature.title}</h3>
                <p className="text-slate-400">{feature.description}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="py-20 px-4">
        <div className="max-w-4xl mx-auto text-center">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="bg-gradient-to-br from-blue-600 to-cyan-600 rounded-3xl p-12"
          >
            <h2 className="text-3xl md:text-4xl font-bold text-white mb-4">
              ¿Listo para comenzar tu preparación?
            </h2>
            <p className="text-blue-100 mb-8 text-lg">
              Únete a miles de estudiantes que confían en ECOEMS Pro para alcanzar sus sueños.
            </p>
            <Button 
              onClick={onStart}
              size="lg"
              className="bg-white text-blue-600 hover:bg-blue-50 font-semibold px-8 py-6 text-lg rounded-xl"
            >
              Empezar Gratis Ahora
              <ChevronRight className="w-5 h-5 ml-2" />
            </Button>
          </motion.div>
        </div>
      </section>

      {/* Footer */}
      <footer className="py-8 px-4 border-t border-white/10">
        <div className="max-w-7xl mx-auto text-center">
          <p className="text-slate-400">
            ECOEMS Pro 2026 - Basado en la guía oficial del ECOEMS 2025
          </p>
          <p className="text-slate-500 text-sm mt-2">
            Esta aplicación es una herramienta de estudio independiente y no tiene afiliación oficial con la UNAM o IPN.
          </p>
        </div>
      </footer>
    </div>
  );
}
