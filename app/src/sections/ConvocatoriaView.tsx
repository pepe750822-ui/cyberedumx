import { motion } from 'framer-motion';
import {
  ChevronLeft, Calendar, FileText,
  CheckCircle, AlertCircle, ExternalLink, GraduationCap,
  Building2
} from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { convocatoria2026 } from '@/data/subjects';
import { useCountdown } from '@/hooks/useCountdown';

interface ConvocatoriaViewProps {
  onBack: () => void;
}

export function ConvocatoriaView({ onBack }: ConvocatoriaViewProps) {
  const examCountdown = useCountdown(convocatoria2026.examDate);

  const importantDates = [
    {
      title: 'Registro',
      start: convocatoria2026.registrationStart,
      end: convocatoria2026.registrationEnd,
      description: 'Período de registro en línea',
      icon: Calendar,
      color: 'blue'
    },
    {
      title: 'Segundo Registro',
      start: convocatoria2026.secondRegistrationStart!,
      end: convocatoria2026.secondRegistrationEnd!,
      description: 'Para UNAM e IPN',
      icon: Calendar,
      color: 'purple'
    },
    {
      title: 'Examen',
      date: convocatoria2026.examDate,
      description: 'Aplicación del examen ECOEMS',
      icon: GraduationCap,
      color: 'emerald',
      isMain: true
    },
    {
      title: 'Resultados',
      date: convocatoria2026.resultsDate,
      description: 'Publicación de resultados',
      icon: FileText,
      color: 'amber'
    }
  ];

  const formatDate = (date: Date) => {
    return date.toLocaleDateString('es-MX', {
      day: 'numeric',
      month: 'long',
      year: 'numeric'
    });
  };

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 p-4 md:p-8">
      <div className="max-w-6xl mx-auto">
        {/* Header */}
        <div className="flex items-center gap-4 mb-8">
          <Button variant="ghost" onClick={onBack} className="text-slate-400 hover:text-white">
            <ChevronLeft className="w-5 h-5 mr-2" />
            Volver
          </Button>
        </div>

        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          className="text-center mb-12"
        >
          <div className="w-24 h-24 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-3xl flex items-center justify-center mx-auto mb-6">
            <GraduationCap className="w-12 h-12 text-white" />
          </div>
          <h1 className="text-4xl font-bold text-white mb-4">
            ECOEMS {convocatoria2026.year}
          </h1>
          <p className="text-slate-400 text-lg max-w-2xl mx-auto">
            Información oficial sobre el concurso de ingreso a preparatoria de la UNAM e IPN
          </p>
        </motion.div>

        {/* Countdown */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.1 }}
          className="mb-12"
        >
          <Card className="bg-gradient-to-br from-blue-600/20 to-cyan-600/20 border-blue-500/30">
            <CardContent className="p-8">
              <p className="text-center text-slate-300 mb-6 text-lg">
                Tiempo restante para el examen
              </p>
              <div className="grid grid-cols-4 gap-4 md:gap-8 max-w-2xl mx-auto">
                <div className="text-center">
                  <div className="bg-white/10 rounded-2xl p-4 mb-2">
                    <span className="text-3xl md:text-4xl font-bold text-white">{examCountdown.days}</span>
                  </div>
                  <span className="text-slate-400 text-sm">Días</span>
                </div>
                <div className="text-center">
                  <div className="bg-white/10 rounded-2xl p-4 mb-2">
                    <span className="text-3xl md:text-4xl font-bold text-white">{examCountdown.hours.toString().padStart(2, '0')}</span>
                  </div>
                  <span className="text-slate-400 text-sm">Horas</span>
                </div>
                <div className="text-center">
                  <div className="bg-white/10 rounded-2xl p-4 mb-2">
                    <span className="text-3xl md:text-4xl font-bold text-white">{examCountdown.minutes.toString().padStart(2, '0')}</span>
                  </div>
                  <span className="text-slate-400 text-sm">Minutos</span>
                </div>
                <div className="text-center">
                  <div className="bg-white/10 rounded-2xl p-4 mb-2">
                    <span className="text-3xl md:text-4xl font-bold text-white">{examCountdown.seconds.toString().padStart(2, '0')}</span>
                  </div>
                  <span className="text-slate-400 text-sm">Segundos</span>
                </div>
              </div>
            </CardContent>
          </Card>
        </motion.div>

        {/* Important Dates */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.2 }}
          className="mb-12"
        >
          <h2 className="text-2xl font-semibold text-white mb-6 flex items-center gap-2">
            <Calendar className="w-6 h-6 text-blue-400" />
            Fechas Importantes
          </h2>
          <div className="grid md:grid-cols-2 gap-4">
            {importantDates.map((date, index) => (
              <motion.div
                key={date.title}
                initial={{ opacity: 0, x: -20 }}
                animate={{ opacity: 1, x: 0 }}
                transition={{ delay: 0.2 + index * 0.05 }}
              >
                <Card className={`bg-white/5 border-white/10 ${date.isMain ? 'ring-2 ring-emerald-500/50' : ''}`}>
                  <CardContent className="p-6">
                    <div className="flex items-start gap-4">
                      <div className={`w-12 h-12 bg-${date.color}-500/20 rounded-xl flex items-center justify-center flex-shrink-0`}>
                        <date.icon className={`w-6 h-6 text-${date.color}-400`} />
                      </div>
                      <div className="flex-1">
                        <h3 className="text-white font-semibold mb-1">{date.title}</h3>
                        <p className="text-slate-400 text-sm mb-2">{date.description}</p>
                        {'start' in date && date.start && date.end ? (
                          <p className="text-blue-400">
                            {formatDate(date.start)} - {formatDate(date.end)}
                          </p>
                        ) : (
                          <p className="text-emerald-400 font-semibold">
                            {formatDate(date.date || new Date())}
                          </p>
                        )}
                      </div>
                    </div>
                  </CardContent>
                </Card>
              </motion.div>
            ))}
          </div>
        </motion.div>

        {/* Modalities */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.3 }}
          className="mb-12"
        >
          <h2 className="text-2xl font-semibold text-white mb-6 flex items-center gap-2">
            <Building2 className="w-6 h-6 text-purple-400" />
            Modalidades de Ingreso
          </h2>
          <div className="grid md:grid-cols-2 gap-6">
            {convocatoria2026.modalities.map((modality, index) => (
              <motion.div
                key={modality.name}
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ delay: 0.3 + index * 0.05 }}
              >
                <Card className="bg-white/5 border-white/10 h-full">
                  <CardHeader>
                    <CardTitle className="text-white text-lg">{modality.name}</CardTitle>
                  </CardHeader>
                  <CardContent>
                    <p className="text-slate-400 mb-4">{modality.description}</p>
                    
                    <h4 className="text-white font-semibold mb-2 flex items-center gap-2">
                      <CheckCircle className="w-4 h-4 text-emerald-400" />
                      Requisitos
                    </h4>
                    <ul className="space-y-2 mb-4">
                      {modality.requirements.map((req, i) => (
                        <li key={i} className="text-slate-400 text-sm flex items-start gap-2">
                          <span className="w-1.5 h-1.5 bg-blue-400 rounded-full mt-2 flex-shrink-0" />
                          {req}
                        </li>
                      ))}
                    </ul>

                    <h4 className="text-white font-semibold mb-2 flex items-center gap-2">
                      <Building2 className="w-4 h-4 text-blue-400" />
                      Escuelas
                    </h4>
                    <p className="text-slate-400 text-sm">
                      {modality.schools.join(', ')}
                    </p>
                  </CardContent>
                </Card>
              </motion.div>
            ))}
          </div>
        </motion.div>

        {/* General Requirements */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.4 }}
          className="mb-12"
        >
          <Card className="bg-white/5 border-white/10">
            <CardHeader>
              <CardTitle className="text-white flex items-center gap-2">
                <AlertCircle className="w-5 h-5 text-amber-400" />
                Requisitos Generales
              </CardTitle>
            </CardHeader>
            <CardContent>
              <ul className="space-y-3">
                {convocatoria2026.requirements.map((req, index) => (
                  <li key={index} className="flex items-start gap-3">
                    <CheckCircle className="w-5 h-5 text-emerald-400 flex-shrink-0 mt-0.5" />
                    <span className="text-slate-300">{req}</span>
                  </li>
                ))}
              </ul>
            </CardContent>
          </Card>
        </motion.div>

        {/* Registration Link */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.5 }}
          className="text-center"
        >
          <Card className="bg-gradient-to-br from-blue-600 to-cyan-600 border-0">
            <CardContent className="p-8">
              <h3 className="text-2xl font-bold text-white mb-4">
                ¿Listo para registrarte?
              </h3>
              <p className="text-blue-100 mb-6">
                El registro se realiza a través del portal oficial del gobierno mexicano
              </p>
              <Button 
                size="lg"
                variant="secondary"
                className="bg-white text-blue-600 hover:bg-blue-50"
                onClick={() => window.open('https://miderechomilugar.gob.mx', '_blank')}
              >
                Ir al Sitio Oficial
                <ExternalLink className="w-5 h-5 ml-2" />
              </Button>
            </CardContent>
          </Card>
        </motion.div>
      </div>
    </div>
  );
}
