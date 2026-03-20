// Tipos principales para la aplicación ECOEMS Pro 2026

export interface User {
  id: string;
  name: string;
  email: string;
  avatar?: string;
  createdAt: Date;
  streak: number;
  lastStudyDate: Date;
  totalStudyTime: number; // en minutos
  level: number;
  xp: number;
}

export interface Subject {
  id: string;
  name: string;
  description: string;
  icon: string;
  color: string;
  topics: Topic[];
  totalQuestions: number;
}

export interface Topic {
  id: string;
  subjectId: string;
  name: string;
  description: string;
  flashcards: Flashcard[];
  questions: Question[];
  progress: number;
  completed: boolean;
}

export interface Flashcard {
  id: string;
  front: string;
  back: string;
  example?: string;
  imageUrl?: string;
}

export interface Question {
  id: string;
  topicId: string;
  subjectId: string;
  question: string;
  options: string[];
  correctAnswer: number;
  explanation: string;
  difficulty: 'easy' | 'medium' | 'hard';
  type: 'multiple_choice';
}

export interface UserProgress {
  userId: string;
  subjectProgress: SubjectProgress[];
  totalAnswered: number;
  correctAnswers: number;
  totalStudyTime: number;
  mockExams: MockExamResult[];
}

export interface SubjectProgress {
  subjectId: string;
  completed: boolean;
  progress: number;
  correctAnswers: number;
  totalAnswered: number;
  topicsProgress: TopicProgress[];
}

export interface TopicProgress {
  topicId: string;
  completed: boolean;
  progress: number;
  correctAnswers: number;
  totalAnswered: number;
}

export interface MockExamResult {
  id: string;
  userId: string;
  date: Date;
  score: number;
  totalQuestions: number;
  correctAnswers: number;
  timeSpent: number; // en segundos
  subjectScores: SubjectScore[];
  predictedSchools: PredictedSchool[];
}

export interface SubjectScore {
  subjectId: string;
  correct: number;
  total: number;
  percentage: number;
}

export interface PredictedSchool {
  schoolName: string;
  probability: number;
  minScore: number;
}

export interface Achievement {
  id: string;
  name: string;
  description: string;
  icon: string;
  condition: string;
  unlockedAt?: Date;
  unlocked: boolean;
  rarity: 'common' | 'rare' | 'epic' | 'legendary';
}

export interface StudyPlan {
  id: string;
  userId: string;
  weekStart: Date;
  weekEnd: Date;
  dailyPlans: DailyPlan[];
  weakSubjects: string[];
  dailyStudyTime: number; // en minutos
}

export interface DailyPlan {
  day: string;
  subjects: string[];
  topics: string[];
  estimatedTime: number;
  completed: boolean;
}

export interface ConvocatoriaInfo {
  year: number;
  registrationStart: Date;
  registrationEnd: Date;
  secondRegistrationStart?: Date;
  secondRegistrationEnd?: Date;
  examDate: Date;
  resultsDate: Date;
  modalities: Modality[];
  requirements: string[];
}

export interface Modality {
  name: string;
  description: string;
  requirements: string[];
  schools: string[];
}

export type ViewType = 
  | 'landing' 
  | 'dashboard' 
  | 'subjects' 
  | 'topic' 
  | 'practice' 
  | 'mock-exam' 
  | 'flashcards' 
  | 'progress' 
  | 'achievements' 
  | 'study-plan' 
  | 'convocatoria';
