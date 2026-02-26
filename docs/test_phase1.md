# Phase 1 Testing Scenarios: Project Setup & Foundation

This document outlines the testing scenarios to verify that Phase 1 of the Selasar Digital project development has been completed successfully.

## 1. Environment & Framework Verification

**Scenario 1.1: Verify Laravel Initialization**
*   **Action:** Run `php artisan --version` in the project root.
*   **Expected Result:** CLI outputs Laravel Framework version 12.x.x.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 1.2: Verify Frontend Stack (Vite, Tailwind, Alpine.js)**
*   **Action:** 
    1. Check `package.json` for `vite`, `tailwindcss`, `@tailwindcss/vite`, and `alpinejs`.
    2. Check `resources/js/app.js` for Alpine.js initialization.
    3. Run `npm run dev` or `npm run build`.
*   **Expected Result:** 
    1. Dependencies are present in `package.json`.
    2. `window.Alpine = Alpine; Alpine.start();` is present in `app.js`.
    3. Vite builds frontend assets successfully without errors.
*   **Status:** [x] Pass / [ ] Fail

## 2. Database & Migrations Verification

**Scenario 2.1: Verify Database Connection**
*   **Action:** Check the `.env` file for the correct database credentials (`DB_CONNECTION=mysql`, `DB_DATABASE=selasar-digital-db`, etc.).
*   **Expected Result:** The `.env` variables match the local MySQL setup.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 2.2: Verify Database Migrations**
*   **Action:** 
    1. Check your database client (e.g., phpMyAdmin, DBeaver) or run `php artisan migrate:status`.
    2. Verify the existence of the following tables:
        *   `users`
        *   `services`
        *   `project_categories`
        *   `portfolio_projects`
        *   `testimonials`
        *   `inquiries`
*   **Expected Result:** All specified tables are created in the `selasar-digital-db` database with the correct structure (columns).
*   **Status:** [x] Pass / [ ] Fail

**Scenario 2.3: Verify Database Seeders (Dummy Data)**
*   **Action:** Inspect the database tables directly or use Laravel Tinker (`php artisan tinker`) to check row counts and data:
    *   `App\Models\User::first()->email` (Should be admin@selasardigital.com)
    *   `App\Models\Service::count()` (Should be > 0)
    *   `App\Models\ProjectCategory::count()` (Should be > 0)
    *   `App\Models\PortfolioProject::count()` (Should be > 0)
    *   `App\Models\Testimonial::count()` (Should be > 0)
*   **Expected Result:** Dummy data successfully populated from seeders across all relevant tables.
*   **Status:** [x] Pass / [ ] Fail

## 3. Supplementary Configurations

**Scenario 3.1: Horizon and Reverb**
*   **Action:** Review setup decisions.
*   **Expected Result:** Laravel Horizon and Reverb were deliberately skipped for Phase 1 as they are not natively fully supported or required for local Windows development of this corporate profile site.
*   **Status:** [x] N/A

---
**Testing Performed By:** ___________________________
**Date:** ___________________________
**Sign-off:** ___________________________
