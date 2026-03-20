import { useState } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import {
  LayoutDashboard, BookMarked, Target, Trophy, Calendar,
  BarChart3, Settings, Menu, ChevronRight,
  Sparkles
} from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Avatar, AvatarFallback } from '@/components/ui/avatar';
import { Sheet, SheetContent, SheetTrigger } from '@/components/ui/sheet';
import { LandingPage } from '@/sections/LandingPage';
import { Dashboard } from '@/sections/Dashboard';
import { SubjectsView } from '@/sections/SubjectsView';
import { MockExam } from '@/sections/MockExam';
import { AchievementsView } from '@/sections/AchievementsView';
import { ConvocatoriaView } from '@/sections/ConvocatoriaView';
import { ProgressView } from '@/sections/ProgressView';
import { useUserProgress } from '@/hooks/useUserProgress';
import type { ViewType, MockExamResult } from '@/types/ecoems';
import { Toaster, toast } from 'sonner';

const navItems = [
  { id: 'dashboard', label: 'Dashboard', icon: LayoutDashboard },
  { id: 'subjects', label: 'Materias', icon: BookMarked },
  { id: 'mock-exam', label: 'Simulacro', icon: Target },
  { id: 'progress', label: 'Progreso', icon: BarChart3 },
  { id: 'achievements', label: 'Logros', icon: Trophy },
  { id: 'convocatoria', label: 'Convocatoria', icon: Calendar },
];

function Sidebar({ 
  currentView, 
  onNavigate, 
  user 
}: { 
  currentView: ViewType; 
  onNavigate: (view: ViewType) => void;
  user: { name: string; level: number; xp: number };
}) {
  return (
    <div className="w-64 h-full bg-slate-900 border-r border-white/10 flex flex-col">
      {/* Logo */}
      <div className="p-6 border-b border-white/10">
        <div className="flex items-center gap-3">
          <div className="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center">
            <Sparkles className="w-6 h-6 text-white" />
          </div>
          <div>
            <span className="text-lg font-bold text-white">ECOEMS Pro</span>
            <span className="text-xs text-slate-400 block">2026</span>
          </div>
        </div>
      </div>

      {/* User */}
      <div className="p-4 border-b border-white/10">
        <div className="flex items-center gap-3">
          <Avatar className="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-500">
            <AvatarFallback className="text-white font-semibold">
              {user.name.charAt(0).toUpperCase()}
            </AvatarFallback>
          </Avatar>
          <div className="flex-1 min-w-0">
            <p className="text-white font-medium truncate">{user.name}</p>
            <p className="text-slate-400 text-sm">Nivel {user.level}</p>
          </div>
        </div>
        <div className="mt-3">
          <div className="flex justify-between text-xs text-slate-400 mb-1">
            <span>XP</span>
            <span>{user.xp % 1000}/1000</span>
          </div>
          <div className="h-2 bg-white/10 rounded-full overflow-hidden">
            <div 
              className="h-full bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full transition-all"
              style={{ width: `${(user.xp % 1000) / 10}%` }}
            />
          </div>
        </div>
      </div>

      {/* Navigation */}
      <nav className="flex-1 p-4 space-y-1">
        {navItems.map((item) => {
          const Icon = item.icon;
          const isActive = currentView === item.id;
          
          return (
            <button
              key={item.id}
              onClick={() => onNavigate(item.id as ViewType)}
              className={`w-full flex items-center gap-3 px-4 py-3 rounded-xl transition-all ${
                isActive
                  ? 'bg-blue-500/20 text-blue-400 border border-blue-500/30'
                  : 'text-slate-400 hover:bg-white/5 hover:text-white'
              }`}
            >
              <Icon className="w-5 h-5" />
              <span className="font-medium">{item.label}</span>
              {isActive && <ChevronRight className="w-4 h-4 ml-auto" />}
            </button>
          );
        })}
      </nav>

      {/* Footer */}
      <div className="p-4 border-t border-white/10">
        <button className="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-white/5 hover:text-white transition-all">
          <Settings className="w-5 h-5" />
          <span className="font-medium">Configuración</span>
        </button>
      </div>
    </div>
  );
}

function MobileNav({ 
  currentView, 
  onNavigate 
}: { 
  currentView: ViewType; 
  onNavigate: (view: ViewType) => void;
}) {
  return (
    <Sheet>
      <SheetTrigger asChild>
        <Button variant="ghost" size="icon" className="lg:hidden text-white">
          <Menu className="w-6 h-6" />
        </Button>
      </SheetTrigger>
      <SheetContent side="left" className="w-64 bg-slate-900 border-white/10 p-0">
        <div className="p-6 border-b border-white/10">
          <div className="flex items-center gap-3">
            <div className="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center">
              <Sparkles className="w-6 h-6 text-white" />
            </div>
            <span className="text-lg font-bold text-white">ECOEMS Pro</span>
          </div>
        </div>
        <nav className="p-4 space-y-1">
          {navItems.map((item) => {
            const Icon = item.icon;
            const isActive = currentView === item.id;
            
            return (
              <button
                key={item.id}
                onClick={() => onNavigate(item.id as ViewType)}
                className={`w-full flex items-center gap-3 px-4 py-3 rounded-xl transition-all ${
                  isActive
                    ? 'bg-blue-500/20 text-blue-400'
                    : 'text-slate-400 hover:bg-white/5 hover:text-white'
                }`}
              >
                <Icon className="w-5 h-5" />
                <span className="font-medium">{item.label}</span>
              </button>
            );
          })}
        </nav>
      </SheetContent>
    </Sheet>
  );
}

function AppContent() {
  const [currentView, setCurrentView] = useState<ViewType>('landing');
  const [, setViewParams] = useState<any>(null);
  
  const { 
    user, 
    progress, 
    achievements,
    addMockExamResult,
    getOverallProgress,
    getAccuracy
  } = useUserProgress();

  const handleNavigate = (view: ViewType, params?: any) => {
    setCurrentView(view);
    setViewParams(params);
  };

  const handleMockExamComplete = (result: MockExamResult) => {
    addMockExamResult(result);
    toast.success('¡Simulacro completado!', {
      description: `Obtuviste ${result.score} puntos estimados`,
    });
  };

  // Landing page
  if (currentView === 'landing') {
    return <LandingPage onStart={() => setCurrentView('dashboard')} />;
  }

  const overallProgress = getOverallProgress();
  const accuracy = getAccuracy();

  return (
    <div className="flex h-screen bg-slate-950">
      {/* Desktop Sidebar */}
      <div className="hidden lg:block">
        <Sidebar 
          currentView={currentView} 
          onNavigate={handleNavigate}
          user={user}
        />
      </div>

      {/* Main Content */}
      <div className="flex-1 flex flex-col overflow-hidden">
        {/* Mobile Header */}
        <header className="lg:hidden bg-slate-900 border-b border-white/10 p-4">
          <div className="flex items-center justify-between">
            <MobileNav currentView={currentView} onNavigate={handleNavigate} />
            <div className="flex items-center gap-2">
              <div className="w-8 h-8 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center">
                <Sparkles className="w-4 h-4 text-white" />
              </div>
              <span className="text-lg font-bold text-white">ECOEMS Pro</span>
            </div>
            <Avatar className="w-8 h-8 bg-gradient-to-br from-blue-500 to-cyan-500">
              <AvatarFallback className="text-white text-sm">
                {user.name.charAt(0).toUpperCase()}
              </AvatarFallback>
            </Avatar>
          </div>
        </header>

        {/* Content Area */}
        <main className="flex-1 overflow-auto">
          <AnimatePresence mode="wait">
            <motion.div
              key={currentView}
              initial={{ opacity: 0, y: 10 }}
              animate={{ opacity: 1, y: 0 }}
              exit={{ opacity: 0, y: -10 }}
              transition={{ duration: 0.2 }}
              className="h-full"
            >
              {currentView === 'dashboard' && (
                <Dashboard
                  user={user}
                  overallProgress={overallProgress}
                  accuracy={accuracy}
                  achievements={achievements}
                  onNavigate={handleNavigate}
                />
              )}
              
              {currentView === 'subjects' && (
                <SubjectsView
                  onBack={() => setCurrentView('dashboard')}
                  onNavigate={handleNavigate}
                />
              )}
              
              {currentView === 'mock-exam' && (
                <MockExam
                  onBack={() => setCurrentView('dashboard')}
                  onComplete={handleMockExamComplete}
                />
              )}
              
              {currentView === 'achievements' && (
                <AchievementsView
                  achievements={achievements}
                  onBack={() => setCurrentView('dashboard')}
                />
              )}
              
              {currentView === 'convocatoria' && (
                <ConvocatoriaView
                  onBack={() => setCurrentView('dashboard')}
                />
              )}
              
              {currentView === 'progress' && (
                <ProgressView
                  progress={progress}
                  accuracy={accuracy}
                  onBack={() => setCurrentView('dashboard')}
                />
              )}
            </motion.div>
          </AnimatePresence>
        </main>

        {/* Mobile Bottom Nav */}
        <nav className="lg:hidden bg-slate-900 border-t border-white/10 px-4 py-2">
          <div className="flex justify-around">
            {navItems.slice(0, 5).map((item) => {
              const Icon = item.icon;
              const isActive = currentView === item.id;
              
              return (
                <button
                  key={item.id}
                  onClick={() => handleNavigate(item.id as ViewType)}
                  className={`flex flex-col items-center gap-1 p-2 rounded-lg transition-all ${
                    isActive
                      ? 'text-blue-400'
                      : 'text-slate-400'
                  }`}
                >
                  <Icon className="w-5 h-5" />
                  <span className="text-xs">{item.label}</span>
                </button>
              );
            })}
          </div>
        </nav>
      </div>
    </div>
  );
}

function App() {
  return (
    <>
      <Toaster 
        position="top-right" 
        toastOptions={{
          style: {
            background: '#1F2937',
            color: '#fff',
            border: '1px solid #374151'
          }
        }}
      />
      <AppContent />
    </>
  );
}

export default App;
