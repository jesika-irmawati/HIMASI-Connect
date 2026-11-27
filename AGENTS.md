# AGENTS.md

## Project state
- Greenfield **HIMASI Connect** app: Laravel 10.50, PHP 8.1, Vite 4, PHPUnit 10. Use Laravel 10 conventions, not newer Laravel docs.
- Only the stock Laravel skeleton exists (welcome route/view, default `User` model and migrations). There are no domain features, auth UI, or CSS framework yet.
- Product/UI specs are `agent/PRD(1).md` and `agent/design(1).md`; read both before feature or UI work. `agent/task-instruction.md` defines the task workflow. Keep `agent/` as source material, not scratch files.
- The docs refer to `prd.md`, `design.md`, and `.agents/tasklist.md`, but the actual folder is `agent/`; the `.agents/` path and those filenames do not exist. Use the real paths and create the tasklist at `agent/tasklist.md`.
- Target stack is Blade + Bootstrap 5 with Indonesian copy. The current skeleton does not include Bootstrap, Tailwind, Breeze, or Jetstream; add Bootstrap rather than switching CSS frameworks. Wire assets through the existing Vite entrypoints (`resources/css/app.css`, `resources/js/app.js`).

## Setup and commands
- Fresh setup: `composer install` -> `npm install` -> copy `.env.example` to `.env` -> `php artisan key:generate` -> create the MySQL DB -> `php artisan migrate`.
- Local `.env` expects MySQL database `HIMASI-Connect` (`root`, no password); create it before `php artisan migrate`.
- Dev: `php artisan serve` plus `npm run dev`; production assets: `npm run build`.
- Tests are PHPUnit 10 (no Pest): `php artisan test`; one file: `php artisan test tests/Feature/ExampleTest.php`; one test: `php artisan test --filter=test_name`.
- Format PHP with `vendor/bin/pint`. There is no ESLint/Prettier, typecheck, CI, or `composer test` script.
- On this Windows setup (Laragon), if PowerShell blocks `npm`, run `npm.cmd` instead.

## Test database gotcha
- `phpunit.xml` leaves the SQLite overrides commented out, so tests use the MySQL database from `.env`. Before adding tests with `RefreshDatabase`, switch tests to SQLite `:memory:` (uncomment those lines) or a dedicated test DB; otherwise tests will migrate/wipe the dev database.

## Domain rules
- Roles: Super User, Pengurus, Anggota, Pembina. Ketua is a position inside Pengurus, not a separate role.
- Pembina can view voting/results and advise but cannot vote. One vote per user per voting. No self-registration; Super User manages accounts, roles, and access.
- Enforce authorization on the server; hiding menus/buttons is not enough.
- PRD §15 lists unresolved decisions (role details, notification/documentation priority, etc.). Flag conflicts instead of silently inventing behavior.

## Workflow
- Follow `agent/design(1).md` for the shared header/sidebar layout and Bootstrap components.
- After each task or task group, update the tasklist as required by `agent/task-instruction.md` (`[x] ✅`, note files created/changed).
