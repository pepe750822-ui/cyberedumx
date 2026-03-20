import { useState } from 'react';
import { motion } from 'framer-motion';
import {
  BookOpen, Calculator, Leaf, Zap, FlaskConical,
  PenTool, FunctionSquare, Landmark, Globe, Map, Scale,
  Flame, Trophy, Target, TrendingUp, Clock, Calendar,
  ChevronRight, Star, Award, BarChart3, Brain
} from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { subjects } from '@/data/subjects';
import type { User, Achievement, ViewType } from '@/types/ecoems';

interface DashboardProps {
  user: User;
  overallProgress: number;
  accuracy: number;
  achievements: Achievement[];
  onNavigate: (view: ViewType, params?: any) => void;
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

const rarityColors: Record<string, string> = {
  common: 'from-slate-400 to-slate-500',
  rare: 'from-blue-400 to-blue-500',
  epic: 'from-purple-400 to-purple-500',
  legendary: 'from-amber-400 to-amber-500'
};

export function Dashboard({ user, overallProgress, accuracy, achievements, onNavigate }: DashboardProps) {
  const [greeting] = useState(() => {
    const hour = new Date().getHours();
    if (hour < 12) return 'Buenos días';
    if (hour < 18) return 'Buenas tardes';
    return 'Buenas noches';
  });

  const unlockedAchievements = achievements.filter(a => a.unlocked);
  const recentAchievements = unlockedAchievements.slice(-3);

  const quickActions = [
    {
      icon: Brain,
      title: 'Modo Práctica',
      description: 'Practica por tema',
      color: 'from-blue-500 to-blue-600',
      onClick: () => onNavigate('subjects')
    },
    {
      icon: Target,
      title: 'Simulacro',
      description: 'Examen completo',
      color: 'from-purple-500 to-purple-600',
      onClick: () => onNavigate('mock-exam')
    },
    {
      icon: BookOpen,
      title: 'Flashcards',
      description: 'Repasa conceptos',
      color: 'from-emerald-500 to-emerald-600',
      onClick: () => onNavigate('subjects')
    },
    {
      icon: BarChart3,
      title: 'Mi Progreso',
      description: 'Ver estadísticas',
      color: 'from-orange-500 to-orange-600',
      onClick: () => onNavigate('progress')
    }
  ];

  const studyTips = [
    'Usa cuadros sinópticos para organizar información de Biología',
    'Practica 10 sucesiones numéricas cada día',
    'Lee un texto diario y resume la idea principal',
    'Repasa las fórmulas de geometría antes de dormir',
    'Haz un simulacro completo cada semana'
  ];

  const [randomTip] = useState(() => 
    studyTips[Math.floor(Math.random() * studyTips.length)]
  );

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 p-4 md:p-8">
      <div className="max-w-7xl mx-auto">
        {/* Header */}
        <motion.div
          initial={{ opacity: 0, y: -20 }}
          animate={{ opacity: 1, y: 0 }}
          className="mb-8"
        >
          <div className="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
              <h1 className="text-3xl md:text-4xl font-bold text-white mb-2">
                {greeting}, <span className="text-blue-400">{user.name}</span>!
              </h1>
              <p className="text-slate-400">
                Tu examen es en <span className="text-white font-semibold">111 días</span>. 
                ¡Sigue así!
              </p>
            </div>
            <div className="flex items-center gap-4">
              <div className="flex items-center gap-2 bg-orange-500/20 px-4 py-2 rounded-xl border border-orange-500/30">
                <Flame className="w-5 h-5 text-orange-400" />
                <span className="text-white font-semibold">{user.streak} días</span>
              </div>
              <div className="flex items-center gap-2 bg-blue-500/20 px-4 py-2 rounded-xl border border-blue-500/30">
                <Star className="w-5 h-5 text-blue-400" />
                <span className="text-white font-semibold">Nivel {user.level}</span>
              </div>
            </div>
          </div>
        </motion.div>

        {/* Stats Cards */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.1 }}
          className="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8"
        >
          <Card className="bg-white/5 border-white/10">
            <CardContent className="p-4">
              <div className="flex items-center gap-3">
                <div className="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                  <Target className="w-5 h-5 text-blue-400" />
                </div>
                <div>
                  <p className="text-slate-400 text-sm">Progreso Total</p>
                  <p className="text-2xl font-bold text-white">{overallProgress.toFixed(0)}%</p>
                </div>
              </div>
            </CardContent>
          </Card>

          <Card className="bg-white/5 border-white/10">
            <CardContent className="p-4">
              <div className="flex items-center gap-3">
                <div className="w-10 h-10 bg-emerald-500/20 rounded-lg flex items-center justify-center">
                  <TrendingUp className="w-5 h-5 text-emerald-400" />
                </div>
                <div>
                  <p className="text-slate-400 text-sm">Precisión</p>
                  <p className="text-2xl font-bold text-white">{accuracy.toFixed(0)}%</p>
                </div>
              </div>
            </CardContent>
          </Card>

          <Card className="bg-white/5 border-white/10">
            <CardContent className="p-4">
              <div className="flex items-center gap-3">
                <div className="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center">
                  <Trophy className="w-5 h-5 text-purple-400" />
                </div>
                <div>
                  <p className="text-slate-400 text-sm">Logros</p>
                  <p className="text-2xl font-bold text-white">{unlockedAchievements.length}/{achievements.length}</p>
                </div>
              </div>
            </CardContent>
          </Card>

          <Card className="bg-white/5 border-white/10">
            <CardContent className="p-4">
              <div className="flex items-center gap-3">
                <div className="w-10 h-10 bg-orange-500/20 rounded-lg flex items-center justify-center">
                  <Clock className="w-5 h-5 text-orange-400" />
                </div>
                <div>
                  <p className="text-slate-400 text-sm">Tiempo de Estudio</p>
                  <p className="text-2xl font-bold text-white">{Math.floor(user.totalStudyTime / 60)}h</p>
                </div>
              </div>
            </CardContent>
          </Card>
        </motion.div>

        {/* Quick Actions */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.2 }}
          className="mb-8"
        >
          <h2 className="text-xl font-semibold text-white mb-4">Acciones Rápidas</h2>
          <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
            {quickActions.map((action, index) => (
              <motion.button
                key={action.title}
                initial={{ opacity: 0, scale: 0.9 }}
                animate={{ opacity: 1, scale: 1 }}
                transition={{ delay: 0.2 + index * 0.05 }}
                onClick={action.onClick}
                className="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all text-left group"
              >
                <div className={`w-12 h-12 bg-gradient-to-br ${action.color} rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform`}>
                  <action.icon className="w-6 h-6 text-white" />
                </div>
                <h3 className="text-white font-semibold mb-1">{action.title}</h3>
                <p className="text-slate-400 text-sm">{action.description}</p>
              </motion.button>
            ))}
          </div>
        </motion.div>

        <div className="grid lg:grid-cols-3 gap-8">
          {/* Subjects Progress */}
          <motion.div
            initial={{ opacity: 0, x: -20 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ delay: 0.3 }}
            className="lg:col-span-2"
          >
            <Card className="bg-white/5 border-white/10">
              <CardHeader>
                <CardTitle className="text-white flex items-center gap-2">
                  <BookOpen className="w-5 h-5 text-blue-400" />
                  Progreso por Materia
                </CardTitle>
              </CardHeader>
              <CardContent>
                <div className="space-y-4">
                  {subjects.map((subject, index) => {
                    const Icon = subjectIcons[subject.icon] || BookOpen;
                    const progress = Math.random() * 100; // Simulado por ahora
                    
                    return (
                      <motion.div
                        key={subject.id}
                        initial={{ opacity: 0, x: -20 }}
                        animate={{ opacity: 1, x: 0 }}
                        transition={{ delay: 0.3 + index * 0.05 }}
                        className="flex items-center gap-4 p-3 rounded-xl hover:bg-white/5 transition-colors cursor-pointer"
                        onClick={() => onNavigate('subjects', { subjectId: subject.id })}
                      >
                        <div 
                          className="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                          style={{ backgroundColor: `${subject.color}30` }}
                        >
                          <Icon className="w-5 h-5" style={{ color: subject.color }} />
                        </div>
                        <div className="flex-1 min-w-0">
                          <div className="flex items-center justify-between mb-1">
                            <span className="text-white font-medium truncate">{subject.name}</span>
                            <span className="text-slate-400 text-sm">{progress.toFixed(0)}%</span>
                          </div>
                          <div className="h-2 bg-white/10 rounded-full overflow-hidden">
                            <div 
                              className="h-full rounded-full transition-all duration-500"
                              style={{ 
                                width: `${progress}%`,
                                backgroundColor: subject.color
                              }}
                            />
                          </div>
                        </div>
                        <ChevronRight className="w-5 h-5 text-slate-500" />
                      </motion.div>
                    );
                  })}
                </div>
              </CardContent>
            </Card>
          </motion.div>

          {/* Sidebar */}
          <motion.div
            initial={{ opacity: 0, x: 20 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ delay: 0.4 }}
            className="space-y-6"
          >
            {/* Daily Tip */}
            <Card className="bg-gradient-to-br from-blue-600/20 to-cyan-600/20 border-blue-500/30">
              <CardContent className="p-4">
                <div className="flex items-start gap-3">
                  <div className="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                    <Brain className="w-5 h-5 text-blue-400" />
                  </div>
                  <div>
                    <h3 className="text-white font-semibold mb-1">Tip del Día</h3>
                    <p className="text-slate-300 text-sm">{randomTip}</p>
                  </div>
                </div>
              </CardContent>
            </Card>

            {/* Recent Achievements */}
            <Card className="bg-white/5 border-white/10">
              <CardHeader>
                <CardTitle className="text-white flex items-center gap-2 text-base">
                  <Award className="w-5 h-5 text-amber-400" />
                  Logros Recientes
                </CardTitle>
              </CardHeader>
              <CardContent>
                {recentAchievements.length > 0 ? (
                  <div className="space-y-3">
                    {recentAchievements.map((achievement) => (
                      <div key={achievement.id} className="flex items-center gap-3">
                        <div className={`w-10 h-10 bg-gradient-to-br ${rarityColors[achievement.rarity]} rounded-lg flex items-center justify-center`}>
                          <Trophy className="w-5 h-5 text-white" />
                        </div>
                        <div>
                          <p className="text-white font-medium text-sm">{achievement.name}</p>
                          <p className="text-slate-400 text-xs">{achievement.description}</p>
                        </div>
                      </div>
                    ))}
                  </div>
                ) : (
                  <p className="text-slate-400 text-sm text-center py-4">
                    ¡Completa actividades para desbloquear logros!
                  </p>
                )}
                <Button 
                  variant="ghost" 
                  className="w-full mt-4 text-blue-400 hover:text-blue-300 hover:bg-blue-500/10"
                  onClick={() => onNavigate('achievements')}
                >
                  Ver todos los logros
                  <ChevronRight className="w-4 h-4 ml-2" />
                </Button>
              </CardContent>
            </Card>

            {/* Study Plan */}
            <Card className="bg-white/5 border-white/10">
              <CardHeader>
                <CardTitle className="text-white flex items-center gap-2 text-base">
                  <Calendar className="w-5 h-5 text-emerald-400" />
                  Plan de Hoy
                </CardTitle>
              </CardHeader>
              <CardContent>
                <div className="space-y-3">
                  <div className="flex items-center gap-3 p-3 rounded-lg bg-white/5">
                    <div className="w-2 h-2 bg-blue-400 rounded-full" />
                    <span className="text-white text-sm flex-1">Repasar Biología - La célula</span>
                    <span className="text-slate-400 text-xs">20 min</span>
                  </div>
                  <div className="flex items-center gap-3 p-3 rounded-lg bg-white/5">
                    <div className="w-2 h-2 bg-purple-400 rounded-full" />
                    <span className="text-white text-sm flex-1">Practicar sucesiones</span>
                    <span className="text-slate-400 text-xs">15 min</span>
                  </div>
                  <div className="flex items-center gap-3 p-3 rounded-lg bg-white/5">
                    <div className="w-2 h-2 bg-orange-400 rounded-full" />
                    <span className="text-white text-sm flex-1">Simulacro corto</span>
                    <span className="text-slate-400 text-xs">30 min</span>
                  </div>
                </div>
                <Button 
                  variant="ghost" 
                  className="w-full mt-4 text-emerald-400 hover:text-emerald-300 hover:bg-emerald-500/10"
                  onClick={() => onNavigate('study-plan')}
                >
                  Ver plan completo
                  <ChevronRight className="w-4 h-4 ml-2" />
                </Button>
              </CardContent>
            </Card>
          </motion.div>
        </div>
      </div>
    </div>
  );
}
