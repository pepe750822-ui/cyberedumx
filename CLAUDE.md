# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Repository Structure

This repo contains two distinct React applications plus legacy PHP/HTML files for the main site:

- **`cyberedu-mx/`** — Production app deployed to Vercel (repo: `pepe750822-ui/cyberedu-mx`). Full-featured platform with Supabase backend, auth, payments.
- **`app/`** — Standalone ECOEMS Pro 2026 prototype (no backend, localStorage only). Contains a nested `app/appkimi/` subdirectory.
- **Root PHP/HTML files** — Legacy Hostinger-deployed site (ecoems simulators, guias, etc.)

## Stack

- **Frontend:** React + TypeScript + Vite (both apps)
- **Backend:** Supabase (project: `lruwnuldlltwktdfrwho`, region São Paulo)
- **Auth:** Google OAuth via Supabase
- **AI:** Vercel serverless functions + Claude API (model: `claude-haiku-4-5`)
- **Payments:** Mercado Pago Checkout Bricks
- **Deploy:** Vercel (domain: cyberedumx.com)

## Commands

### `cyberedu-mx/` (main production app)
```bash
cd cyberedu-mx
npm run dev        # Dev server
npm run build      # Production build (vite build)
npm run lint       # ESLint
npm run test       # Vitest (run once)
npm run test:watch # Vitest watch mode
```

### `app/` (ECOEMS Pro prototype)
```bash
cd app
npm run dev        # Dev server
npm run build      # tsc -b && vite build
npm run lint       # ESLint
```

## Architecture — `cyberedu-mx/`

**Routing:** React Router v6 with `ProtectedRoute` wrapping auth-required pages. Auth state lives in `src/contexts/AuthContext.tsx`.

**AI Tutor (`src/components/AITutor.tsx`):** Core feature. Parses XML tags from Claude API responses using `parseAllBlocks()`. Renders artifacts: `CalculatorArtifact`, `ExerciseArtifact`, `ChemistryArtifact`, `GlobeArtifact`. Citations use `[BIO 5.1]` style with in-component navigation. Mermaid diagrams limited to 1 per response (`flowchart TD` only). ReactMarkdown requires `urlTransform={(url) => url}`.

**Serverless API (`api/`):** Vercel functions. Key endpoints: `ai-chat.ts` (Claude API calls), `create-subscription.ts` (Mercado Pago), `webhook-mercadopago.ts` (payment callbacks), `usage.ts` (daily limit tracking).

**Daily limits:** 5 free queries tracked via `daily_usage` table in Supabase. Token packs unlock additional queries.

**Business model:** Freemium tiers — Básico / Popular / Pro / Maestro (token-based).

**Supabase client:** `src/integrations/supabase/client.ts`. Generated types at `src/integrations/supabase/types.ts`.

**PWA:** Service worker, offline cache (`useOfflineCache`), push notifications (`useNotifications`), progress sync (`useSync`).

**Streak system:** `StreakAutoSync` component in `App.tsx` auto-syncs streak/progress on page load using localStorage keys `last_study_date` and `study_streak_count`.

## Architecture — `app/` (ECOEMS Pro prototype)

**No backend.** All state persisted via `useUserProgress` hook → localStorage keys: `ecoems_user`, `ecoems_progress`, `ecoems_achievements`.

**Navigation:** Single-page view switching via `ViewType` union type (`src/types/ecoems.ts`). No React Router — `currentView` state in `App.tsx` controls which section renders.

**Data:** Static subject/question data in `src/data/subjects.ts`. XP system: correct answer = 10 XP, incorrect = 5 XP, level up every 1000 XP.
