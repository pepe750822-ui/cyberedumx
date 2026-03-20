import { useState, useEffect, useCallback } from 'react';
import type { User, UserProgress, Achievement, SubjectProgress, MockExamResult } from '@/types/ecoems';
import { achievements } from '@/data/subjects';

const DEFAULT_USER: User = {
  id: 'user-1',
  name: 'Estudiante',
  email: 'estudiante@ecoems.com',
  streak: 0,
  lastStudyDate: new Date(),
  totalStudyTime: 0,
  level: 1,
  xp: 0,
  createdAt: new Date()
};

const DEFAULT_PROGRESS: UserProgress = {
  userId: 'user-1',
  subjectProgress: [],
  totalAnswered: 0,
  correctAnswers: 0,
  totalStudyTime: 0,
  mockExams: []
};

export function useUserProgress() {
  const [user, setUser] = useState<User>(DEFAULT_USER);
  const [progress, setProgress] = useState<UserProgress>(DEFAULT_PROGRESS);
  const [userAchievements, setUserAchievements] = useState<Achievement[]>(achievements);
  const [isLoaded, setIsLoaded] = useState(false);

  // Cargar datos del localStorage al iniciar
  useEffect(() => {
    const savedUser = localStorage.getItem('ecoems_user');
    const savedProgress = localStorage.getItem('ecoems_progress');
    const savedAchievements = localStorage.getItem('ecoems_achievements');

    if (savedUser) {
      setUser(JSON.parse(savedUser));
    }
    if (savedProgress) {
      setProgress(JSON.parse(savedProgress));
    }
    if (savedAchievements) {
      setUserAchievements(JSON.parse(savedAchievements));
    }
    setIsLoaded(true);
  }, []);

  // Guardar en localStorage cuando cambian los datos
  useEffect(() => {
    if (isLoaded) {
      localStorage.setItem('ecoems_user', JSON.stringify(user));
      localStorage.setItem('ecoems_progress', JSON.stringify(progress));
      localStorage.setItem('ecoems_achievements', JSON.stringify(userAchievements));
    }
  }, [user, progress, userAchievements, isLoaded]);

  const updateUserName = useCallback((name: string) => {
    setUser(prev => ({ ...prev, name }));
  }, []);

  const addXP = useCallback((amount: number) => {
    setUser(prev => {
      const newXP = prev.xp + amount;
      const newLevel = Math.floor(newXP / 1000) + 1;
      return {
        ...prev,
        xp: newXP,
        level: newLevel > prev.level ? newLevel : prev.level
      };
    });
  }, []);

  const updateStreak = useCallback(() => {
    setUser(prev => {
      const today = new Date().toDateString();
      const lastDate = new Date(prev.lastStudyDate).toDateString();
      
      if (today === lastDate) {
        return prev;
      }

      const yesterday = new Date();
      yesterday.setDate(yesterday.getDate() - 1);
      
      const newStreak = lastDate === yesterday.toDateString() 
        ? prev.streak + 1 
        : 1;

      return {
        ...prev,
        streak: newStreak,
        lastStudyDate: new Date()
      };
    });
  }, []);

  const addStudyTime = useCallback((minutes: number) => {
    setUser(prev => ({
      ...prev,
      totalStudyTime: prev.totalStudyTime + minutes
    }));
    setProgress(prev => ({
      ...prev,
      totalStudyTime: prev.totalStudyTime + minutes
    }));
  }, []);

  const updateSubjectProgress = useCallback((subjectId: string, topicId: string, correct: boolean) => {
    setProgress(prev => {
      const subjectIdx = prev.subjectProgress.findIndex(sp => sp.subjectId === subjectId);
      
      let newSubjectProgress: SubjectProgress[];
      
      if (subjectIdx === -1) {
        // Crear nuevo progreso de materia
        newSubjectProgress = [
          ...prev.subjectProgress,
          {
            subjectId,
            completed: false,
            progress: 0,
            correctAnswers: correct ? 1 : 0,
            totalAnswered: 1,
            topicsProgress: [{
              topicId,
              completed: false,
              progress: 10,
              correctAnswers: correct ? 1 : 0,
              totalAnswered: 1
            }]
          }
        ];
      } else {
        // Actualizar progreso existente
        newSubjectProgress = prev.subjectProgress.map((sp, idx) => {
          if (idx !== subjectIdx) return sp;
          
          const topicIdx = sp.topicsProgress.findIndex(tp => tp.topicId === topicId);
          
          let newTopicsProgress;
          if (topicIdx === -1) {
            newTopicsProgress = [
              ...sp.topicsProgress,
              {
                topicId,
                completed: false,
                progress: 10,
                correctAnswers: correct ? 1 : 0,
                totalAnswered: 1
              }
            ];
          } else {
            newTopicsProgress = sp.topicsProgress.map((tp, tIdx) => {
              if (tIdx !== topicIdx) return tp;
              const newTotal = tp.totalAnswered + 1;
              const newCorrect = tp.correctAnswers + (correct ? 1 : 0);
              const newProgress = Math.min(100, (newTotal / 10) * 100);
              return {
                ...tp,
                totalAnswered: newTotal,
                correctAnswers: newCorrect,
                progress: newProgress,
                completed: newProgress >= 100
              };
            });
          }
          
          const totalAnswered = sp.totalAnswered + 1;
          const correctAnswers = sp.correctAnswers + (correct ? 1 : 0);
          const avgProgress = newTopicsProgress.reduce((sum, tp) => sum + tp.progress, 0) / newTopicsProgress.length;
          
          return {
            ...sp,
            totalAnswered,
            correctAnswers,
            progress: avgProgress,
            completed: avgProgress >= 100,
            topicsProgress: newTopicsProgress
          };
        });
      }

      return {
        ...prev,
        subjectProgress: newSubjectProgress,
        totalAnswered: prev.totalAnswered + 1,
        correctAnswers: prev.correctAnswers + (correct ? 1 : 0)
      };
    });

    // Añadir XP por responder
    addXP(correct ? 10 : 5);
    updateStreak();
  }, [addXP, updateStreak]);

  const addMockExamResult = useCallback((result: MockExamResult) => {
    setProgress(prev => ({
      ...prev,
      mockExams: [...prev.mockExams, result]
    }));
    addXP(Math.floor(result.score / 10) * 50);
    updateStreak();
  }, [addXP, updateStreak]);

  const unlockAchievement = useCallback((achievementId: string) => {
    setUserAchievements(prev => 
      prev.map(ach => 
        ach.id === achievementId && !ach.unlocked
          ? { ...ach, unlocked: true, unlockedAt: new Date() }
          : ach
      )
    );
    addXP(100);
  }, [addXP]);

  const getSubjectProgress = useCallback((subjectId: string) => {
    return progress.subjectProgress.find(sp => sp.subjectId === subjectId);
  }, [progress.subjectProgress]);

  const getOverallProgress = useCallback(() => {
    if (progress.subjectProgress.length === 0) return 0;
    const totalProgress = progress.subjectProgress.reduce((sum, sp) => sum + sp.progress, 0);
    return totalProgress / progress.subjectProgress.length;
  }, [progress.subjectProgress]);

  const getAccuracy = useCallback(() => {
    if (progress.totalAnswered === 0) return 0;
    return (progress.correctAnswers / progress.totalAnswered) * 100;
  }, [progress.totalAnswered, progress.correctAnswers]);

  return {
    user,
    progress,
    achievements: userAchievements,
    isLoaded,
    updateUserName,
    addXP,
    updateStreak,
    addStudyTime,
    updateSubjectProgress,
    addMockExamResult,
    unlockAchievement,
    getSubjectProgress,
    getOverallProgress,
    getAccuracy
  };
}
