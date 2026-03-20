import { useState } from 'react';
import { motion } from 'framer-motion';
import {
  BookOpen, Calculator, Leaf, Zap, FlaskConical,
  PenTool, FunctionSquare, Landmark, Globe, Map, Scale,
  ChevronLeft, ChevronRight, RotateCw, Play, CheckCircle,
  GraduationCap
} from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Progress } from '@/components/ui/progress';
import { subjects } from '@/data/subjects';
import type { Flashcard, Topic, Subject, ViewType } from '@/types/ecoems';

interface SubjectsViewProps {
  onBack: () => void;
  onNavigate?: (view: ViewType, params?: any) => void;
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

function FlashcardComponent({ 
  flashcard, 
  isFlipped, 
  onFlip 
}: { 
  flashcard: Flashcard; 
  isFlipped: boolean; 
  onFlip: () => void;
}) {
  return (
    <div 
      className="relative w-full h-80 cursor-pointer perspective-1000"
      onClick={onFlip}
    >
      <motion.div
        className="w-full h-full relative preserve-3d"
        animate={{ rotateY: isFlipped ? 180 : 0 }}
        transition={{ duration: 0.6, type: 'spring' }}
        style={{ transformStyle: 'preserve-3d' }}
      >
        {/* Front */}
        <div 
          className="absolute inset-0 backface-hidden"
          style={{ backfaceVisibility: 'hidden' }}
        >
          <Card className="w-full h-full bg-gradient-to-br from-blue-600 to-cyan-600 border-0">
            <CardContent className="flex flex-col items-center justify-center h-full p-8 text-center">
              <GraduationCap className="w-12 h-12 text-white/60 mb-4" />
              <h3 className="text-2xl font-bold text-white mb-4">{flashcard.front}</h3>
              <p className="text-white/70 text-sm">Toca para ver la respuesta</p>
            </CardContent>
          </Card>
        </div>

        {/* Back */}
        <div 
          className="absolute inset-0 backface-hidden"
          style={{ 
            backfaceVisibility: 'hidden',
            transform: 'rotateY(180deg)'
          }}
        >
          <Card className="w-full h-full bg-gradient-to-br from-slate-800 to-slate-900 border border-white/20">
            <CardContent className="flex flex-col justify-center h-full p-8">
              <h4 className="text-lg font-semibold text-white mb-4">Respuesta:</h4>
              <p className="text-slate-300 whitespace-pre-line mb-4">{flashcard.back}</p>
              {flashcard.example && (
                <div className="mt-4 p-4 bg-blue-500/20 rounded-lg border border-blue-500/30">
                  <p className="text-blue-300 text-sm">
                    <span className="font-semibold">Ejemplo:</span> {flashcard.example}
                  </p>
                </div>
              )}
            </CardContent>
          </Card>
        </div>
      </motion.div>
    </div>
  );
}

function TopicDetail({ 
  topic, 
  subject, 
  onBack 
}: { 
  topic: Topic; 
  subject: Subject;
  onBack: () => void;
}) {
  const [currentFlashcardIndex, setCurrentFlashcardIndex] = useState(0);
  const [isFlipped, setIsFlipped] = useState(false);

  const currentFlashcard = topic.flashcards[currentFlashcardIndex];

  const nextFlashcard = () => {
    setIsFlipped(false);
    setTimeout(() => {
      setCurrentFlashcardIndex((prev) => 
        prev < topic.flashcards.length - 1 ? prev + 1 : 0
      );
    }, 200);
  };

  const prevFlashcard = () => {
    setIsFlipped(false);
    setTimeout(() => {
      setCurrentFlashcardIndex((prev) => 
        prev > 0 ? prev - 1 : topic.flashcards.length - 1
      );
    }, 200);
  };

  return (
    <div className="space-y-6">
      <div className="flex items-center gap-4">
        <Button variant="ghost" onClick={onBack} className="text-slate-400 hover:text-white">
          <ChevronLeft className="w-5 h-5 mr-2" />
          Volver
        </Button>
        <div>
          <h2 className="text-2xl font-bold text-white">{topic.name}</h2>
          <p className="text-slate-400">{subject.name}</p>
        </div>
      </div>

      <div className="grid lg:grid-cols-2 gap-8">
        {/* Flashcards */}
        <div>
          <h3 className="text-lg font-semibold text-white mb-4 flex items-center gap-2">
            <RotateCw className="w-5 h-5 text-blue-400" />
            Flashcards ({currentFlashcardIndex + 1}/{topic.flashcards.length})
          </h3>
          
          <FlashcardComponent
            flashcard={currentFlashcard}
            isFlipped={isFlipped}
            onFlip={() => setIsFlipped(!isFlipped)}
          />

          <div className="flex justify-center gap-4 mt-6">
            <Button 
              variant="outline" 
              onClick={prevFlashcard}
              className="border-white/20 text-white hover:bg-white/10"
            >
              <ChevronLeft className="w-5 h-5 mr-2" />
              Anterior
            </Button>
            <Button 
              variant="outline" 
              onClick={() => setIsFlipped(!isFlipped)}
              className="border-white/20 text-white hover:bg-white/10"
            >
              <RotateCw className="w-5 h-5 mr-2" />
              Voltear
            </Button>
            <Button 
              variant="outline" 
              onClick={nextFlashcard}
              className="border-white/20 text-white hover:bg-white/10"
            >
              Siguiente
              <ChevronRight className="w-5 h-5 ml-2" />
            </Button>
          </div>
        </div>

        {/* Practice Section */}
        <div>
          <h3 className="text-lg font-semibold text-white mb-4 flex items-center gap-2">
            <Play className="w-5 h-5 text-emerald-400" />
            Práctica
          </h3>
          
          <Card className="bg-white/5 border-white/10">
            <CardContent className="p-6">
              <div className="text-center py-8">
                <div className="w-20 h-20 bg-emerald-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                  <Play className="w-10 h-10 text-emerald-400" />
                </div>
                <h4 className="text-xl font-semibold text-white mb-2">
                  Modo Práctica
                </h4>
                <p className="text-slate-400 mb-6">
                  Pon a prueba tus conocimientos con preguntas de este tema
                </p>
                <Button className="bg-emerald-500 hover:bg-emerald-600 text-white">
                  Comenzar Práctica
                  <ChevronRight className="w-5 h-5 ml-2" />
                </Button>
              </div>
            </CardContent>
          </Card>

          {/* Progress */}
          <Card className="bg-white/5 border-white/10 mt-6">
            <CardContent className="p-6">
              <h4 className="text-white font-semibold mb-4">Tu Progreso</h4>
              <div className="space-y-4">
                <div>
                  <div className="flex justify-between mb-2">
                    <span className="text-slate-400">Flashcards vistas</span>
                    <span className="text-white">{currentFlashcardIndex + 1}/{topic.flashcards.length}</span>
                  </div>
                  <Progress 
                    value={((currentFlashcardIndex + 1) / topic.flashcards.length) * 100} 
                    className="h-2"
                  />
                </div>
                <div>
                  <div className="flex justify-between mb-2">
                    <span className="text-slate-400">Preguntas respondidas</span>
                    <span className="text-white">0/10</span>
                  </div>
                  <Progress value={0} className="h-2" />
                </div>
              </div>
            </CardContent>
          </Card>
        </div>
      </div>
    </div>
  );
}

export function SubjectsView({ onBack }: SubjectsViewProps) {
  const [selectedSubject, setSelectedSubject] = useState<Subject | null>(null);
  const [selectedTopic, setSelectedTopic] = useState<Topic | null>(null);

  if (selectedTopic && selectedSubject) {
    return (
      <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 p-4 md:p-8">
        <div className="max-w-6xl mx-auto">
          <TopicDetail
            topic={selectedTopic}
            subject={selectedSubject}
            onBack={() => setSelectedTopic(null)}
          />
        </div>
      </div>
    );
  }

  if (selectedSubject) {
    return (
      <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 p-4 md:p-8">
        <div className="max-w-6xl mx-auto">
          <div className="flex items-center gap-4 mb-8">
            <Button variant="ghost" onClick={() => setSelectedSubject(null)} className="text-slate-400 hover:text-white">
              <ChevronLeft className="w-5 h-5 mr-2" />
              Volver a Materias
            </Button>
          </div>

          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            className="mb-8"
          >
            <div 
              className="w-16 h-16 rounded-2xl flex items-center justify-center mb-4"
              style={{ backgroundColor: `${selectedSubject.color}30` }}
            >
              {(() => {
                const Icon = subjectIcons[selectedSubject.icon] || BookOpen;
                return <Icon className="w-8 h-8" style={{ color: selectedSubject.color }} />;
              })()}
            </div>
            <h1 className="text-3xl font-bold text-white mb-2">{selectedSubject.name}</h1>
            <p className="text-slate-400">{selectedSubject.description}</p>
          </motion.div>

          <h2 className="text-xl font-semibold text-white mb-4">Temas</h2>
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            {selectedSubject.topics.map((topic, index) => (
              <motion.div
                key={topic.id}
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ delay: index * 0.05 }}
              >
                <Card 
                  className="bg-white/5 border-white/10 hover:bg-white/10 transition-all cursor-pointer group"
                  onClick={() => setSelectedTopic(topic)}
                >
                  <CardContent className="p-6">
                    <div className="flex items-start justify-between mb-4">
                      <div 
                        className="w-10 h-10 rounded-lg flex items-center justify-center"
                        style={{ backgroundColor: `${selectedSubject.color}20` }}
                      >
                        <BookOpen className="w-5 h-5" style={{ color: selectedSubject.color }} />
                      </div>
                      {topic.completed && (
                        <CheckCircle className="w-5 h-5 text-emerald-400" />
                      )}
                    </div>
                    <h3 className="text-white font-semibold mb-2 group-hover:text-blue-400 transition-colors">
                      {topic.name}
                    </h3>
                    <p className="text-slate-400 text-sm mb-4">{topic.description}</p>
                    <div className="flex items-center justify-between">
                      <span className="text-slate-500 text-sm">{topic.flashcards.length} flashcards</span>
                      <div className="flex items-center gap-2">
                        <div className="w-16 h-2 bg-white/10 rounded-full overflow-hidden">
                          <div 
                            className="h-full rounded-full transition-all"
                            style={{ 
                              width: `${topic.progress}%`,
                              backgroundColor: selectedSubject.color
                            }}
                          />
                        </div>
                        <span className="text-slate-400 text-xs">{topic.progress}%</span>
                      </div>
                    </div>
                  </CardContent>
                </Card>
              </motion.div>
            ))}
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-900 to-blue-950 p-4 md:p-8">
      <div className="max-w-6xl mx-auto">
        <div className="flex items-center gap-4 mb-8">
          <Button variant="ghost" onClick={onBack} className="text-slate-400 hover:text-white">
            <ChevronLeft className="w-5 h-5 mr-2" />
            Volver al Dashboard
          </Button>
        </div>

        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          className="mb-8"
        >
          <h1 className="text-3xl font-bold text-white mb-2">Materias</h1>
          <p className="text-slate-400">Selecciona una materia para comenzar a estudiar</p>
        </motion.div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {subjects.map((subject, index) => {
            const Icon = subjectIcons[subject.icon] || BookOpen;
            return (
              <motion.div
                key={subject.id}
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ delay: index * 0.05 }}
              >
                <Card 
                  className="bg-white/5 border-white/10 hover:bg-white/10 transition-all cursor-pointer group overflow-hidden"
                  onClick={() => setSelectedSubject(subject)}
                >
                  <div 
                    className="h-2"
                    style={{ backgroundColor: subject.color }}
                  />
                  <CardContent className="p-6">
                    <div className="flex items-start justify-between mb-4">
                      <div 
                        className="w-14 h-14 rounded-xl flex items-center justify-center"
                        style={{ backgroundColor: `${subject.color}20` }}
                      >
                        <Icon className="w-7 h-7" style={{ color: subject.color }} />
                      </div>
                      <div className="text-right">
                        <span className="text-slate-400 text-sm">{subject.totalQuestions} preg</span>
                      </div>
                    </div>
                    <h3 className="text-xl font-semibold text-white mb-2 group-hover:text-blue-400 transition-colors">
                      {subject.name}
                    </h3>
                    <p className="text-slate-400 text-sm mb-4">{subject.description}</p>
                    <div className="flex items-center justify-between">
                      <span className="text-slate-500 text-sm">{subject.topics.length} temas</span>
                      <Button 
                        variant="ghost" 
                        size="sm"
                        className="text-blue-400 hover:text-blue-300 hover:bg-blue-500/10"
                      >
                        Explorar
                        <ChevronRight className="w-4 h-4 ml-1" />
                      </Button>
                    </div>
                  </CardContent>
                </Card>
              </motion.div>
            );
          })}
        </div>
      </div>
    </div>
  );
}
