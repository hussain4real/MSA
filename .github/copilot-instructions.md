# Copilot Instructions
# Project Overview: 
This is a digital platform for maritime shipping and logistics. it's a multi-tenant application designed to streamline operations and improve efficiency in the shipping industry.
Organization Model is the **Tenant**.
## Architecture Overview

This is a **Laravel 12 + Vue 3 + Inertia.js** application with **Filament admin panel** and SSR support. Key architectural decisions:

- **Hybrid SPA/MPA**: Inertia.js bridges Laravel backend with Vue frontend without API endpoints
- **Admin/User Split**: Filament admin panel at `/admin` + main app using Inertia pages
- **SSR-First**: Built for server-side rendering with client-side hydration
- **UI Component System**: Uses reka-ui (headless) + custom components, not Shadcn/ui despite `components.json`

## Development Workflows

### Starting Development
```bash
composer dev  # Runs server, queue, logs, and vite concurrently
# OR for SSR development:
composer dev:ssr  # Includes SSR server
```

### Testing
```bash
composer test     # Runs Pest tests with config clearing
php artisan test  # Direct test execution
```

### Frontend Tooling
```bash
npm run dev       # Vite dev server
npm run build:ssr # Build both client and SSR bundles
npm run lint      # ESLint + auto-fix
npm run format    # Prettier formatting
```

## Code Patterns & Conventions

### Frontend Structure
- **Pages**: `resources/js/pages/` - Inertia page components (auto-discovered)
- **Components**: Organized as `App*` (shell), UI primitives, and feature-specific
- **Composables**: TypeScript composables for reusable logic (e.g., `useAppearance` for theme)
- **Layouts**: Embedded in pages, not separate layout files

### Backend Patterns
- **Route Organization**: Split across `web.php`, `auth.php`, `settings.php`
- **Filament Integration**: Separate provider in `app/Providers/Filament/AdminPanelProvider.php`
- **Settings Pages**: Dedicated `/settings/*` routes with profile, password, appearance sections

### Theme System
The app implements a sophisticated light/dark theme system:
- **Composable**: `useAppearance()` manages theme state
- **Persistence**: Dual storage (localStorage + cookies) for client/SSR consistency
- **System Integration**: Respects OS preference when set to "system"
- **SSR Compatible**: Theme initialized in both `app.ts` and `ssr.ts`

### Testing Approach
- **Pest Framework**: Feature tests in `tests/Feature/` following Laravel conventions
- **Inertia Testing**: Uses built-in Inertia test assertions
- **Database**: Uses `RefreshDatabase` trait for clean test state

## Integration Points

### Inertia Configuration
- **SSR**: Enabled by default at `http://127.0.0.1:13714`
- **Page Resolution**: Auto-discovers Vue components in `resources/js/pages/`
- **Progress Bar**: Configured with gray color (`#4B5563`)

### Ziggy Integration
- **Route Helpers**: Available in both client and SSR contexts via `ZiggyVue` plugin
- **TypeScript**: Routes are strongly typed through Ziggy generation

### Filament Admin
- **Panel**: Configured with Amber primary color
- **Auto-discovery**: Resources, Pages, and Widgets auto-discovered from `app/Filament/`
- **Authentication**: Separate auth middleware stack from main app

## Key Files for Understanding

- `resources/js/app.ts` & `ssr.ts` - Frontend entry points with theme initialization
- `composer.json` scripts - Custom dev workflows with concurrency
- `app/Providers/Filament/AdminPanelProvider.php` - Admin panel configuration
- `resources/js/composables/useAppearance.ts` - Theme system implementation
- `routes/settings.php` - Settings page routing patterns

**Note**: When creating model, migration, factory and seeder, use the `make:model --mfs` option.
while for filament resource use the `make:filament-resource` command.
