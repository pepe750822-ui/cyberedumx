import { motion } from 'framer-motion';
import {
  ChevronLeft, Trophy, Flame, Target, BookOpen,
  Star, Crown, Footprints, Layers, Moon, Sun, Zap, Lock
} from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import type { Achievement } from '@/types/ecoems';

interface AchievementsViewProps {
  achievements: Achievement[];
  onBack: () => void;
}

const achievementIcons: Record<string, React.ElementType> = {
  'Footprints': Footprints,
  'Flame': Flame,
  'Fire': Flame,
  'Crown': Crown,
  'Calculator': Target,
  'Microscope': BookOpen,
  'FileCheck': Target,
  'Trophy': Trophy,
  'Layers': Layers,
  'Moon': Moon,
  'Sun': Sun,
  'Target': Target
};

const rarityConfig: Record<string, { color: string; label: string; gradient: string }> = {
  common: {
    color: 'text-slate-400',
    label: 'Común',
    gradient: 'from-slate-400 to-slate-500'
  },
  rare: {
    color: 'text-blue-400',
    label: 'Raro',
    gradient: 'from-blue-400 to-blue-500'
  },
  epic: {
    color: 'text-purple-400',
    label: 'Épico',
    gradient: 'from-purple-400 to-purple-500'
  },
  legendary: {
    color: 'text-amber-400',
    label: 'Legendario',
    gradient: 'from-amber-400 to-amber-500'
  }
};

export function AchievementsView({ achievements, onBack }: AchievementsViewProps) {
  const unlockedCount = achievements.filter(a => a.unlocked).length;
  const totalCount = achievements.length;
  const progress = (unlockedCount / totalCount) * 100;

  const unlockedAchievements = achievements.filter(a => a.unlocked);
  const lockedAchievements = achievements.filter(a => !a.unlocked);

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
          <div className="w-24 h-24 bg-gradient-to-br from-amber-500 to-orange-500 rounded-3xl flex items-center justify-center mx-auto mb-6">
            <Trophy className="w-12 h-12 text-white" />
          </div>
          <h1 className="text-4xl font-bold text-white mb-4">Tus Logros</h1>
          <p className="text-slate-400 text-lg max-w-2xl mx-auto">
            Completa actividades para desbloquear insignias y demostrar tu dedicación
          </p>
        </motion.div>

        {/* Progress Overview */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.1 }}
          className="mb-12"
        >
          <Card className="bg-white/5 border-white/10">
            <CardContent className="p-8">
              <div className="flex flex-col md:flex-row items-center justify-between gap-8">
                <div className="text-center md:text-left">
                  <p className="text-slate-400 mb-2">Progreso Total</p>
                  <p className="text-4xl font-bold text-white">
                    {unlockedCount} <span className="text-slate-500">/ {totalCount}</span>
                  </p>
                </div>
                <div className="flex-1 w-full max-w-md">
                  <div className="h-4 bg-white/10 rounded-full overflow-hidden">
                    <motion.div
                      initial={{ width: 0 }}
                      animate={{ width: `${progress}%` }}
                      transition={{ delay: 0.3, duration: 0.8 }}
                      className="h-full bg-gradient-to-r from-amber-500 to-orange-500 rounded-full"
                    />
                  </div>
                  <p className="text-center text-slate-400 mt-2">{progress.toFixed(0)}% completado</p>
                </div>
                <div className="flex gap-4">
                  <div className="text-center">
                    <div className="w-12 h-12 bg-gradient-to-br from-amber-400 to-amber-500 rounded-xl flex items-center justify-center mb-2">
                      <Star className="w-6 h-6 text-white" />
                    </div>
                    <p className="text-amber-400 font-semibold">
                      {achievements.filter(a => a.rarity === 'legendary' && a.unlocked).length}
                    </p>
                  </div>
                  <div className="text-center">
                    <div className="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-500 rounded-xl flex items-center justify-center mb-2">
                      <Zap className="w-6 h-6 text-white" />
                    </div>
                    <p className="text-purple-400 font-semibold">
                      {achievements.filter(a => a.rarity === 'epic' && a.unlocked).length}
                    </p>
                  </div>
                </div>
              </div>
            </CardContent>
          </Card>
        </motion.div>

        {/* Unlocked Achievements */}
        {unlockedAchievements.length > 0 && (
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.2 }}
            className="mb-12"
          >
            <h2 className="text-2xl font-semibold text-white mb-6 flex items-center gap-2">
              <Trophy className="w-6 h-6 text-emerald-400" />
              Logros Desbloqueados
            </h2>
            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
              {unlockedAchievements.map((achievement, index) => {
                const Icon = achievementIcons[achievement.icon] || Trophy;
                const rarity = rarityConfig[achievement.rarity];
                
                return (
                  <motion.div
                    key={achievement.id}
                    initial={{ opacity: 0, scale: 0.9 }}
                    animate={{ opacity: 1, scale: 1 }}
                    transition={{ delay: 0.2 + index * 0.05 }}
                  >
                    <Card className="bg-gradient-to-br from-white/10 to-white/5 border-white/20 overflow-hidden">
                      <div className={`h-1 bg-gradient-to-r ${rarity.gradient}`} />
                      <CardContent className="p-6">
                        <div className="flex items-start gap-4">
                          <div className={`w-14 h-14 bg-gradient-to-br ${rarity.gradient} rounded-xl flex items-center justify-center flex-shrink-0`}>
                            <Icon className="w-7 h-7 text-white" />
                          </div>
                          <div className="flex-1">
                            <div className="flex items-center gap-2 mb-1">
                              <h3 className="text-white font-semibold">{achievement.name}</h3>
                            </div>
                            <p className="text-slate-400 text-sm mb-2">{achievement.description}</p>
                            <span className={`text-xs px-2 py-1 rounded-full bg-white/10 ${rarity.color}`}>
                              {rarity.label}
                            </span>
                          </div>
                        </div>
                        {achievement.unlockedAt && (
                          <p className="text-slate-500 text-xs mt-4">
                            Desbloqueado el {new Date(achievement.unlockedAt).toLocaleDateString('es-MX')}
                          </p>
                        )}
                      </CardContent>
                    </Card>
                  </motion.div>
                );
              })}
            </div>
          </motion.div>
        )}

        {/* Locked Achievements */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.3 }}
        >
          <h2 className="text-2xl font-semibold text-white mb-6 flex items-center gap-2">
            <Lock className="w-6 h-6 text-slate-400" />
            Logros por Desbloquear
          </h2>
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            {lockedAchievements.map((achievement, index) => {
              const rarity = rarityConfig[achievement.rarity];
              
              return (
                <motion.div
                  key={achievement.id}
                  initial={{ opacity: 0, scale: 0.9 }}
                  animate={{ opacity: 1, scale: 1 }}
                  transition={{ delay: 0.3 + index * 0.05 }}
                >
                  <Card className="bg-white/5 border-white/10 opacity-70 hover:opacity-100 transition-opacity">
                    <CardContent className="p-6">
                      <div className="flex items-start gap-4">
                        <div className="w-14 h-14 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0">
                          <Lock className="w-6 h-6 text-slate-500" />
                        </div>
                        <div className="flex-1">
                          <div className="flex items-center gap-2 mb-1">
                            <h3 className="text-slate-300 font-semibold">{achievement.name}</h3>
                          </div>
                          <p className="text-slate-500 text-sm mb-2">{achievement.description}</p>
                          <span className={`text-xs px-2 py-1 rounded-full bg-white/5 ${rarity.color}`}>
                            {rarity.label}
                          </span>
                        </div>
                      </div>
                    </CardContent>
                  </Card>
                </motion.div>
              );
            })}
          </div>
        </motion.div>
      </div>
    </div>
  );
}
