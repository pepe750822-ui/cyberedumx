import { motion } from 'framer-motion';
import {
  ChevronLeft, TrendingUp, BarChart3, Target, Clock,
  Calendar, Award, BookOpen,
  ArrowUp, ArrowDown, Minus
} from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { 
  BarChart, 
  Bar, 
  XAxis, 
  YAxis, 
  CartesianGrid, 
  Tooltip, 
  ResponsiveContainer,
  LineChart,
  Line,
  RadarChart,
  PolarGrid,
  PolarAngleAxis,
  PolarRadiusAxis,
  Radar
} from 'recharts';
import type { UserProgress } from '@/types/ecoems';
import { subjects } from '@/data/subjects';

interface ProgressViewProps {
  progress: UserProgress;
  accuracy: number;
  onBack: () => void;
}

export function ProgressView({ progress, accuracy, onBack }: ProgressViewProps) {
  // Datos simulados para las gráficas
  const subjectPerformance = subjects.map(s => ({
    name: s.name.split(':')[0],
    correct: Math.floor(Math.random() * 80) + 20,
    total: 100
  }));

  const weeklyProgress = [
    { day: 'Lun', hours: 2.5, questions: 45 },
    { day: 'Mar', hours: 3.0, questions: 60 },
    { day: 'Mié', hours: 1.5, questions: 30 },
    { day: 'Jue', hours: 4.0, questions: 80 },
    { day: 'Vie', hours: 2.0, questions: 50 },
    { day: 'Sáb', hours: 5.0, questions: 100 },
    { day: 'Dom', hours: 3.5, questions: 70 }
  ];

  const mockExamHistory = progress.mockExams.length > 0 
    ? progress.mockExams.map((exam, i) => ({
        examen: `Examen ${i + 1}`,
        puntaje: exam.score,
        accuracy: (exam.correctAnswers / exam.totalQuestions) * 100
      }))
    : [
        { examen: 'Simulacro 1', puntaje: 85, accuracy: 65 },
        { examen: 'Simulacro 2', puntaje: 92, accuracy: 72 },
        { examen: 'Simulacro 3', puntaje: 98, accuracy: 78 },
        { examen: 'Simulacro 4', puntaje: 105, accuracy: 82 }
      ];

  const strengthsData = subjects.slice(0, 6).map(s => ({
    subject: s.name.split(':')[0].substring(0, 10),
    A: Math.floor(Math.random() * 40) + 60,
    fullMark: 100
  }));

  const stats = [
    {
      title: 'Total Respondidas',
      value: progress.totalAnswered,
      icon: BookOpen,
      color: 'blue',
      change: '+12%'
    },
    {
      title: 'Precisión Global',
      value: `${accuracy.toFixed(1)}%`,
      icon: Target,
      color: 'emerald',
      change: '+5%'
    },
    {
      title: 'Simulacros',
      value: progress.mockExams.length,
      icon: BarChart3,
      color: 'purple',
      change: '0%'
    },
    {
      title: 'Tiempo Total',
      value: `${Math.floor(progress.totalStudyTime / 60)}h`,
      icon: Clock,
      color: 'orange',
      change: '+8%'
    }
  ];

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 p-4 md:p-8">
      <div className="max-w-7xl mx-auto">
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
          className="mb-8"
        >
          <h1 className="text-3xl font-bold text-white mb-2">Tu Progreso</h1>
          <p className="text-slate-400">Análisis detallado de tu desempeño</p>
        </motion.div>

        {/* Stats Grid */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.1 }}
          className="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8"
        >
          {stats.map((stat) => (
            <Card key={stat.title} className="bg-white/5 border-white/10">
              <CardContent className="p-4">
                <div className="flex items-center justify-between mb-2">
                  <div className={`w-10 h-10 bg-${stat.color}-500/20 rounded-lg flex items-center justify-center`}>
                    <stat.icon className={`w-5 h-5 text-${stat.color}-400`} />
                  </div>
                  <span className={`text-xs flex items-center gap-1 ${
                    stat.change.startsWith('+') ? 'text-emerald-400' : 
                    stat.change.startsWith('-') ? 'text-red-400' : 'text-slate-400'
                  }`}>
                    {stat.change.startsWith('+') && <ArrowUp className="w-3 h-3" />}
                    {stat.change.startsWith('-') && <ArrowDown className="w-3 h-3" />}
                    {stat.change === '0%' && <Minus className="w-3 h-3" />}
                    {stat.change}
                  </span>
                </div>
                <p className="text-slate-400 text-sm">{stat.title}</p>
                <p className="text-2xl font-bold text-white">{stat.value}</p>
              </CardContent>
            </Card>
          ))}
        </motion.div>

        {/* Charts Row 1 */}
        <div className="grid lg:grid-cols-2 gap-6 mb-8">
          {/* Weekly Activity */}
          <motion.div
            initial={{ opacity: 0, x: -20 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ delay: 0.2 }}
          >
            <Card className="bg-white/5 border-white/10">
              <CardHeader>
                <CardTitle className="text-white flex items-center gap-2">
                  <Calendar className="w-5 h-5 text-blue-400" />
                  Actividad Semanal
                </CardTitle>
              </CardHeader>
              <CardContent>
                <div className="h-64">
                  <ResponsiveContainer width="100%" height="100%">
                    <BarChart data={weeklyProgress}>
                      <CartesianGrid strokeDasharray="3 3" stroke="#374151" />
                      <XAxis dataKey="day" stroke="#9CA3AF" />
                      <YAxis stroke="#9CA3AF" />
                      <Tooltip 
                        contentStyle={{ 
                          backgroundColor: '#1F2937', 
                          border: '1px solid #374151',
                          borderRadius: '8px'
                        }}
                      />
                      <Bar dataKey="hours" fill="#3B82F6" name="Horas" radius={[4, 4, 0, 0]} />
                    </BarChart>
                  </ResponsiveContainer>
                </div>
              </CardContent>
            </Card>
          </motion.div>

          {/* Mock Exam Progress */}
          <motion.div
            initial={{ opacity: 0, x: 20 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ delay: 0.3 }}
          >
            <Card className="bg-white/5 border-white/10">
              <CardHeader>
                <CardTitle className="text-white flex items-center gap-2">
                  <TrendingUp className="w-5 h-5 text-emerald-400" />
                  Evolución en Simulacros
                </CardTitle>
              </CardHeader>
              <CardContent>
                <div className="h-64">
                  <ResponsiveContainer width="100%" height="100%">
                    <LineChart data={mockExamHistory}>
                      <CartesianGrid strokeDasharray="3 3" stroke="#374151" />
                      <XAxis dataKey="examen" stroke="#9CA3AF" />
                      <YAxis stroke="#9CA3AF" />
                      <Tooltip 
                        contentStyle={{ 
                          backgroundColor: '#1F2937', 
                          border: '1px solid #374151',
                          borderRadius: '8px'
                        }}
                      />
                      <Line 
                        type="monotone" 
                        dataKey="puntaje" 
                        stroke="#10B981" 
                        strokeWidth={3}
                        dot={{ fill: '#10B981', strokeWidth: 2 }}
                      />
                    </LineChart>
                  </ResponsiveContainer>
                </div>
              </CardContent>
            </Card>
          </motion.div>
        </div>

        {/* Charts Row 2 */}
        <div className="grid lg:grid-cols-2 gap-6 mb-8">
          {/* Subject Performance */}
          <motion.div
            initial={{ opacity: 0, x: -20 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ delay: 0.4 }}
          >
            <Card className="bg-white/5 border-white/10">
              <CardHeader>
                <CardTitle className="text-white flex items-center gap-2">
                  <BarChart3 className="w-5 h-5 text-purple-400" />
                  Desempeño por Materia
                </CardTitle>
              </CardHeader>
              <CardContent>
                <div className="h-64">
                  <ResponsiveContainer width="100%" height="100%">
                    <BarChart data={subjectPerformance} layout="vertical">
                      <CartesianGrid strokeDasharray="3 3" stroke="#374151" />
                      <XAxis type="number" stroke="#9CA3AF" />
                      <YAxis dataKey="name" type="category" stroke="#9CA3AF" width={100} />
                      <Tooltip 
                        contentStyle={{ 
                          backgroundColor: '#1F2937', 
                          border: '1px solid #374151',
                          borderRadius: '8px'
                        }}
                      />
                      <Bar dataKey="correct" fill="#8B5CF6" radius={[0, 4, 4, 0]} />
                    </BarChart>
                  </ResponsiveContainer>
                </div>
              </CardContent>
            </Card>
          </motion.div>

          {/* Strengths Radar */}
          <motion.div
            initial={{ opacity: 0, x: 20 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ delay: 0.5 }}
          >
            <Card className="bg-white/5 border-white/10">
              <CardHeader>
                <CardTitle className="text-white flex items-center gap-2">
                  <Target className="w-5 h-5 text-amber-400" />
                  Fortalezas y Debilidades
                </CardTitle>
              </CardHeader>
              <CardContent>
                <div className="h-64">
                  <ResponsiveContainer width="100%" height="100%">
                    <RadarChart data={strengthsData}>
                      <PolarGrid stroke="#374151" />
                      <PolarAngleAxis dataKey="subject" tick={{ fill: '#9CA3AF', fontSize: 10 }} />
                      <PolarRadiusAxis stroke="#374151" />
                      <Radar
                        name="Desempeño"
                        dataKey="A"
                        stroke="#F59E0B"
                        fill="#F59E0B"
                        fillOpacity={0.3}
                      />
                      <Tooltip 
                        contentStyle={{ 
                          backgroundColor: '#1F2937', 
                          border: '1px solid #374151',
                          borderRadius: '8px'
                        }}
                      />
                    </RadarChart>
                  </ResponsiveContainer>
                </div>
              </CardContent>
            </Card>
          </motion.div>
        </div>

        {/* Recent Activity */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.6 }}
        >
          <Card className="bg-white/5 border-white/10">
            <CardHeader>
              <CardTitle className="text-white flex items-center gap-2">
                <Award className="w-5 h-5 text-cyan-400" />
                Historial de Simulacros
              </CardTitle>
            </CardHeader>
            <CardContent>
              {progress.mockExams.length > 0 ? (
                <div className="space-y-4">
                  {progress.mockExams.map((exam, index) => (
                    <div 
                      key={exam.id} 
                      className="flex items-center justify-between p-4 bg-white/5 rounded-xl"
                    >
                      <div className="flex items-center gap-4">
                        <div className="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                          <span className="text-blue-400 font-semibold">{index + 1}</span>
                        </div>
                        <div>
                          <p className="text-white font-medium">
                            Simulacro {new Date(exam.date).toLocaleDateString('es-MX')}
                          </p>
                          <p className="text-slate-400 text-sm">
                            {exam.correctAnswers}/{exam.totalQuestions} correctas
                          </p>
                        </div>
                      </div>
                      <div className="text-right">
                        <p className="text-2xl font-bold text-white">{exam.score}</p>
                        <p className="text-slate-400 text-sm">puntos</p>
                      </div>
                    </div>
                  ))}
                </div>
              ) : (
                <div className="text-center py-12">
                  <div className="w-16 h-16 bg-white/5 rounded-full flex items-center justify-center mx-auto mb-4">
                    <BarChart3 className="w-8 h-8 text-slate-500" />
                  </div>
                  <p className="text-slate-400 mb-4">Aún no has completado ningún simulacro</p>
                  <Button className="bg-blue-500 hover:bg-blue-600 text-white">
                    Realizar Primer Simulacro
                  </Button>
                </div>
              )}
            </CardContent>
          </Card>
        </motion.div>
      </div>
    </div>
  );
}
