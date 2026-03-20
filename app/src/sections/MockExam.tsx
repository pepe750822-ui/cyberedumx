import { useState, useEffect, useCallback } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import {
  Clock, AlertCircle, ChevronLeft, ChevronRight, Flag,
  CheckCircle, Trophy, TrendingUp, Target,
  RotateCcw, Home
} from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Progress } from '@/components/ui/progress';
import { getRandomQuestions } from '@/data/examQuestions';
import type { Question, MockExamResult } from '@/types/ecoems';

interface MockExamProps {
  onBack: () => void;
  onComplete: (result: MockExamResult) => void;
}

type ExamState = 'intro' | 'running' | 'review' | 'results';

export function MockExam({ onBack, onComplete }: MockExamProps) {
  const [examState, setExamState] = useState<ExamState>('intro');
  const [questions, setQuestions] = useState<Question[]>([]);
  const [currentQuestionIndex, setCurrentQuestionIndex] = useState(0);
  const [selectedAnswers, setSelectedAnswers] = useState<Record<string, number>>({});
  const [flaggedQuestions, setFlaggedQuestions] = useState<Set<string>>(new Set());
  const [timeRemaining, setTimeRemaining] = useState(3 * 60 * 60); // 3 horas en segundos
  const [examStartTime, setExamStartTime] = useState<Date | null>(null);
  const [result, setResult] = useState<MockExamResult | null>(null);

  // Generar preguntas aleatorias para el simulacro (basadas en guía oficial)
  const generateQuestions = useCallback(() => {
    return getRandomQuestions(20);
  }, []);

  const startExam = () => {
    setQuestions(generateQuestions());
    setExamStartTime(new Date());
    setExamState('running');
    setCurrentQuestionIndex(0);
    setSelectedAnswers({});
    setFlaggedQuestions(new Set());
    setTimeRemaining(3 * 60 * 60);
  };

  // Temporizador
  useEffect(() => {
    if (examState === 'running' && timeRemaining > 0) {
      const timer = setInterval(() => {
        setTimeRemaining(prev => {
          if (prev <= 1) {
            finishExam();
            return 0;
          }
          return prev - 1;
        });
      }, 1000);
      return () => clearInterval(timer);
    }
  }, [examState, timeRemaining]);

  const formatTime = (seconds: number) => {
    const hours = Math.floor(seconds / 3600);
    const mins = Math.floor((seconds % 3600) / 60);
    const secs = seconds % 60;
    return `${hours.toString().padStart(2, '0')}:${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
  };

  const selectAnswer = (answerIndex: number) => {
    if (examState !== 'running') return;
    setSelectedAnswers(prev => ({
      ...prev,
      [questions[currentQuestionIndex].id]: answerIndex
    }));
  };

  const toggleFlag = () => {
    const questionId = questions[currentQuestionIndex].id;
    setFlaggedQuestions(prev => {
      const newSet = new Set(prev);
      if (newSet.has(questionId)) {
        newSet.delete(questionId);
      } else {
        newSet.add(questionId);
      }
      return newSet;
    });
  };

  const nextQuestion = () => {
    if (currentQuestionIndex < questions.length - 1) {
      setCurrentQuestionIndex(prev => prev + 1);
    }
  };

  const prevQuestion = () => {
    if (currentQuestionIndex > 0) {
      setCurrentQuestionIndex(prev => prev - 1);
    }
  };

  const goToQuestion = (index: number) => {
    setCurrentQuestionIndex(index);
  };

  const finishExam = () => {
    const endTime = new Date();
    const timeSpent = examStartTime 
      ? Math.floor((endTime.getTime() - examStartTime.getTime()) / 1000)
      : 0;

    let correctCount = 0;
    questions.forEach(q => {
      if (selectedAnswers[q.id] === q.correctAnswer) {
        correctCount++;
      }
    });

    const score = Math.round((correctCount / questions.length) * 100);

    // Calcular puntaje estimado (escala 0-128)
    const estimatedScore = Math.round((correctCount / questions.length) * 128);

    const examResult: MockExamResult = {
      id: `mock-${Date.now()}`,
      userId: 'user-1',
      date: endTime,
      score: estimatedScore,
      totalQuestions: questions.length,
      correctAnswers: correctCount,
      timeSpent,
      subjectScores: [],
      predictedSchools: [
        { schoolName: 'CCH Azcapotzalco', probability: score >= 80 ? 95 : score >= 60 ? 70 : 40, minScore: 95 },
        { schoolName: 'CCH Naucalpan', probability: score >= 75 ? 90 : score >= 55 ? 65 : 35, minScore: 90 },
        { schoolName: 'CCH Vallejo', probability: score >= 70 ? 85 : score >= 50 ? 60 : 30, minScore: 88 },
        { schoolName: 'CCH Oriente', probability: score >= 65 ? 80 : score >= 45 ? 55 : 25, minScore: 85 },
      ]
    };

    setResult(examResult);
    setExamState('results');
    onComplete(examResult);
  };

  const currentQuestion = questions[currentQuestionIndex];
  const answeredCount = Object.keys(selectedAnswers).length;
  const progress = questions.length > 0 ? (answeredCount / questions.length) * 100 : 0;

  // Pantalla de introducción
  if (examState === 'intro') {
    return (
      <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 p-4 md:p-8">
        <div className="max-w-3xl mx-auto">
          <Button variant="ghost" onClick={onBack} className="text-slate-400 hover:text-white mb-8">
            <ChevronLeft className="w-5 h-5 mr-2" />
            Volver
          </Button>

          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            className="text-center mb-12"
          >
            <div className="w-24 h-24 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-3xl flex items-center justify-center mx-auto mb-6">
              <Target className="w-12 h-12 text-white" />
            </div>
            <h1 className="text-4xl font-bold text-white mb-4">Simulacro de Examen</h1>
            <p className="text-slate-400 text-lg">
              Preguntas basadas en la Guía Oficial ECOEMS 2025
            </p>
          </motion.div>

          <div className="grid md:grid-cols-3 gap-6 mb-12">
            <Card className="bg-white/5 border-white/10">
              <CardContent className="p-6 text-center">
                <Clock className="w-8 h-8 text-blue-400 mx-auto mb-3" />
                <p className="text-slate-400 text-sm mb-1">Duración</p>
                <p className="text-white text-xl font-semibold">3 horas</p>
              </CardContent>
            </Card>
            <Card className="bg-white/5 border-white/10">
              <CardContent className="p-6 text-center">
                <AlertCircle className="w-8 h-8 text-amber-400 mx-auto mb-3" />
                <p className="text-slate-400 text-sm mb-1">Preguntas</p>
                <p className="text-white text-xl font-semibold">20+</p>
                <p className="text-slate-500 text-xs">(Examen real: 128)</p>
              </CardContent>
            </Card>
            <Card className="bg-white/5 border-white/10">
              <CardContent className="p-6 text-center">
                <Trophy className="w-8 h-8 text-purple-400 mx-auto mb-3" />
                <p className="text-slate-400 text-sm mb-1">Puntaje Máximo</p>
                <p className="text-white text-xl font-semibold">128 pts</p>
              </CardContent>
            </Card>
          </div>

          <Card className="bg-white/5 border-white/10 mb-8">
            <CardContent className="p-6">
              <h3 className="text-white font-semibold mb-4 flex items-center gap-2">
                <AlertCircle className="w-5 h-5 text-amber-400" />
                Instrucciones
              </h3>
              <ul className="space-y-3 text-slate-300">
                <li className="flex items-start gap-3">
                  <span className="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center flex-shrink-0 text-blue-400 text-sm">1</span>
                  Tienes 3 horas para completar el examen
                </li>
                <li className="flex items-start gap-3">
                  <span className="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center flex-shrink-0 text-blue-400 text-sm">2</span>
                  Puedes marcar preguntas para revisarlas después
                </li>
                <li className="flex items-start gap-3">
                  <span className="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center flex-shrink-0 text-blue-400 text-sm">3</span>
                  Al finalizar recibirás un análisis detallado de tu desempeño
                </li>
                <li className="flex items-start gap-3">
                  <span className="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center flex-shrink-0 text-blue-400 text-sm">4</span>
                  Se calculará una predicción de escuelas según tu puntaje
                </li>
              </ul>
            </CardContent>
          </Card>

          <div className="flex justify-center">
            <Button 
              size="lg"
              onClick={startExam}
              className="bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-semibold px-12 py-6 text-lg rounded-xl"
            >
              Comenzar Simulacro
              <ChevronRight className="w-5 h-5 ml-2" />
            </Button>
          </div>
        </div>
      </div>
    );
  }

  // Pantalla de resultados
  if (examState === 'results' && result) {
    const accuracy = (result.correctAnswers / result.totalQuestions) * 100;
    
    return (
      <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 p-4 md:p-8">
        <div className="max-w-4xl mx-auto">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            className="text-center mb-12"
          >
            <div className="w-24 h-24 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-3xl flex items-center justify-center mx-auto mb-6">
              <Trophy className="w-12 h-12 text-white" />
            </div>
            <h1 className="text-4xl font-bold text-white mb-4">¡Simulacro Completado!</h1>
            <p className="text-slate-400 text-lg">
              Aquí está tu análisis de desempeño
            </p>
          </motion.div>

          {/* Score Card */}
          <Card className="bg-gradient-to-br from-blue-600/20 to-cyan-600/20 border-blue-500/30 mb-8">
            <CardContent className="p-8">
              <div className="grid md:grid-cols-3 gap-8 text-center">
                <div>
                  <p className="text-slate-400 mb-2">Puntaje Estimado</p>
                  <p className="text-5xl font-bold text-white">{result.score}</p>
                  <p className="text-slate-400 text-sm mt-1">de 128 puntos</p>
                </div>
                <div>
                  <p className="text-slate-400 mb-2">Precisión</p>
                  <p className="text-5xl font-bold text-emerald-400">{accuracy.toFixed(0)}%</p>
                  <p className="text-slate-400 text-sm mt-1">{result.correctAnswers}/{result.totalQuestions} correctas</p>
                </div>
                <div>
                  <p className="text-slate-400 mb-2">Tiempo</p>
                  <p className="text-5xl font-bold text-blue-400">
                    {Math.floor(result.timeSpent / 60)}:{(result.timeSpent % 60).toString().padStart(2, '0')}
                  </p>
                  <p className="text-slate-400 text-sm mt-1">minutos</p>
                </div>
              </div>
            </CardContent>
          </Card>

          {/* Predicted Schools */}
          <Card className="bg-white/5 border-white/10 mb-8">
            <CardContent className="p-6">
              <h3 className="text-white font-semibold mb-6 flex items-center gap-2">
                <TrendingUp className="w-5 h-5 text-blue-400" />
                Probabilidad de Ingreso por Escuela
              </h3>
              <div className="space-y-4">
                {result.predictedSchools?.map((school, index) => (
                  <div key={school.schoolName}>
                    <div className="flex justify-between mb-2">
                      <span className="text-white">{school.schoolName}</span>
                      <span className={`font-semibold ${
                        school.probability >= 70 ? 'text-emerald-400' :
                        school.probability >= 40 ? 'text-amber-400' : 'text-red-400'
                      }`}>
                        {school.probability}%
                      </span>
                    </div>
                    <div className="h-3 bg-white/10 rounded-full overflow-hidden">
                      <motion.div
                        initial={{ width: 0 }}
                        animate={{ width: `${school.probability}%` }}
                        transition={{ delay: index * 0.1, duration: 0.8 }}
                        className={`h-full rounded-full ${
                          school.probability >= 70 ? 'bg-emerald-500' :
                          school.probability >= 40 ? 'bg-amber-500' : 'bg-red-500'
                        }`}
                      />
                    </div>
                    <p className="text-slate-500 text-xs mt-1">Puntaje mínimo histórico: {school.minScore}</p>
                  </div>
                ))}
              </div>
            </CardContent>
          </Card>

          {/* Actions */}
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button 
              onClick={startExam}
              variant="outline"
              className="border-white/20 text-white hover:bg-white/10"
            >
              <RotateCcw className="w-5 h-5 mr-2" />
              Intentar de Nuevo
            </Button>
            <Button 
              onClick={onBack}
              className="bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white"
            >
              <Home className="w-5 h-5 mr-2" />
              Volver al Dashboard
            </Button>
          </div>
        </div>
      </div>
    );
  }

  // Pantalla del examen en curso
  return (
    <div className="min-h-screen bg-slate-950">
      {/* Header */}
      <header className="bg-slate-900 border-b border-white/10 sticky top-0 z-50">
        <div className="max-w-7xl mx-auto px-4 py-4">
          <div className="flex items-center justify-between">
            <div className="flex items-center gap-4">
              <span className="text-white font-semibold">Simulacro ECOEMS</span>
              <span className="text-slate-400">|</span>
              <span className="text-slate-400">
                Pregunta {currentQuestionIndex + 1} de {questions.length}
              </span>
            </div>
            <div className="flex items-center gap-4">
              <div className={`flex items-center gap-2 px-4 py-2 rounded-lg ${
                timeRemaining < 300 ? 'bg-red-500/20 text-red-400' : 'bg-blue-500/20 text-blue-400'
              }`}>
                <Clock className="w-5 h-5" />
                <span className="font-mono font-semibold">{formatTime(timeRemaining)}</span>
              </div>
              <Button 
                variant="destructive" 
                size="sm"
                onClick={finishExam}
              >
                Finalizar
              </Button>
            </div>
          </div>
          <Progress value={progress} className="mt-4 h-2" />
        </div>
      </header>

      {/* Main Content */}
      <main className="max-w-7xl mx-auto px-4 py-8">
        <div className="grid lg:grid-cols-4 gap-8">
          {/* Question */}
          <div className="lg:col-span-3">
            <AnimatePresence mode="wait">
              <motion.div
                key={currentQuestionIndex}
                initial={{ opacity: 0, x: 20 }}
                animate={{ opacity: 1, x: 0 }}
                exit={{ opacity: 0, x: -20 }}
              >
                <Card className="bg-white/5 border-white/10 mb-6">
                  <CardContent className="p-8">
                    <div className="flex items-start justify-between mb-6">
                      <span className="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm">
                        Pregunta {currentQuestionIndex + 1}
                      </span>
                      <Button
                        variant="ghost"
                        size="sm"
                        onClick={toggleFlag}
                        className={flaggedQuestions.has(currentQuestion.id) ? 'text-amber-400' : 'text-slate-400'}
                      >
                        <Flag className="w-5 h-5" />
                      </Button>
                    </div>

                    <h2 className="text-xl text-white mb-8">{currentQuestion.question}</h2>

                    <div className="space-y-3">
                      {currentQuestion.options.map((option, index) => {
                        const isSelected = selectedAnswers[currentQuestion.id] === index;
                        return (
                          <button
                            key={index}
                            onClick={() => selectAnswer(index)}
                            className={`w-full p-4 rounded-xl border-2 text-left transition-all ${
                              isSelected
                                ? 'border-blue-500 bg-blue-500/20'
                                : 'border-white/10 bg-white/5 hover:bg-white/10'
                            }`}
                          >
                            <div className="flex items-center gap-4">
                              <span className={`w-8 h-8 rounded-full flex items-center justify-center font-semibold ${
                                isSelected
                                  ? 'bg-blue-500 text-white'
                                  : 'bg-white/10 text-slate-400'
                              }`}>
                                {String.fromCharCode(65 + index)}
                              </span>
                              <span className={isSelected ? 'text-white' : 'text-slate-300'}>
                                {option}
                              </span>
                              {isSelected && <CheckCircle className="w-5 h-5 text-blue-400 ml-auto" />}
                            </div>
                          </button>
                        );
                      })}
                    </div>
                  </CardContent>
                </Card>

                {/* Navigation */}
                <div className="flex justify-between">
                  <Button
                    variant="outline"
                    onClick={prevQuestion}
                    disabled={currentQuestionIndex === 0}
                    className="border-white/20 text-white hover:bg-white/10"
                  >
                    <ChevronLeft className="w-5 h-5 mr-2" />
                    Anterior
                  </Button>
                  <Button
                    variant="outline"
                    onClick={nextQuestion}
                    disabled={currentQuestionIndex === questions.length - 1}
                    className="border-white/20 text-white hover:bg-white/10"
                  >
                    Siguiente
                    <ChevronRight className="w-5 h-5 ml-2" />
                  </Button>
                </div>
              </motion.div>
            </AnimatePresence>
          </div>

          {/* Question Navigator */}
          <div className="lg:col-span-1">
            <Card className="bg-white/5 border-white/10 sticky top-32">
              <CardContent className="p-4">
                <h3 className="text-white font-semibold mb-4">Navegación</h3>
                <div className="grid grid-cols-5 gap-2">
                  {questions.map((q, index) => {
                    const isAnswered = selectedAnswers[q.id] !== undefined;
                    const isFlagged = flaggedQuestions.has(q.id);
                    const isCurrent = index === currentQuestionIndex;

                    return (
                      <button
                        key={q.id}
                        onClick={() => goToQuestion(index)}
                        className={`w-10 h-10 rounded-lg font-semibold text-sm transition-all ${
                          isCurrent
                            ? 'bg-blue-500 text-white'
                            : isAnswered
                            ? 'bg-emerald-500/20 text-emerald-400 border border-emerald-500/50'
                            : isFlagged
                            ? 'bg-amber-500/20 text-amber-400 border border-amber-500/50'
                            : 'bg-white/5 text-slate-400 border border-white/10 hover:bg-white/10'
                        }`}
                      >
                        {index + 1}
                      </button>
                    );
                  })}
                </div>

                <div className="mt-6 space-y-2">
                  <div className="flex items-center gap-2 text-sm">
                    <div className="w-4 h-4 bg-emerald-500/20 border border-emerald-500/50 rounded" />
                    <span className="text-slate-400">Respondida</span>
                  </div>
                  <div className="flex items-center gap-2 text-sm">
                    <div className="w-4 h-4 bg-amber-500/20 border border-amber-500/50 rounded" />
                    <span className="text-slate-400">Marcada</span>
                  </div>
                  <div className="flex items-center gap-2 text-sm">
                    <div className="w-4 h-4 bg-white/5 border border-white/10 rounded" />
                    <span className="text-slate-400">Sin responder</span>
                  </div>
                </div>

                <div className="mt-6 pt-6 border-t border-white/10">
                  <div className="flex justify-between text-sm mb-2">
                    <span className="text-slate-400">Respondidas</span>
                    <span className="text-white">{answeredCount}/{questions.length}</span>
                  </div>
                  <div className="flex justify-between text-sm">
                    <span className="text-slate-400">Marcadas</span>
                    <span className="text-white">{flaggedQuestions.size}</span>
                  </div>
                </div>
              </CardContent>
            </Card>
          </div>
        </div>
      </main>
    </div>
  );
}
