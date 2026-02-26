# Phase 2 Testing Scenarios: CMS & Admin Dashboard Development

This document outlines the testing scenarios to verify that Phase 2 (Setup Authentication and Dashboard UI/UX, CRUD Operations) of the Selasar Digital project development has been completed successfully.

## 1. Authentication (Laravel Breeze)

**Scenario 1.1: Verify Login Page Access**
*   **Action:** Navigate to `http://localhost:8000/login` in the browser.
*   **Expected Result:** The login page renders correctly without CSS/JS errors.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 1.2: Verify Admin Login**
*   **Action:** Enter credentials for the seeder admin account:
    *   Email: `admin@selasardigital.com`
    *   Password: `password`
    *   Click "Log In"
*   **Expected Result:** Successful authentication redirects the user to the `/dashboard`.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 1.3: Verify Logout Functionality**
*   **Action:** From the dashboard, click the user profile dropdown in the top right corner and click "Log Out".
*   **Expected Result:** User is logged out and redirected to the `/` (home) or `/login` page. Attempting to access `/dashboard` directly redirects back to the login page.
*   **Status:** [x] Pass / [ ] Fail

## 2. Dashboard UI/UX

**Scenario 2.1: Verify Global Layout & Theme**
*   **Action:** Access the `/dashboard` page after logging in. 
*   **Expected Result:** 
    *   The layout utilizes a fixed sidebar on the left and a top navigation bar.
    *   The color scheme matches the branding: Dark Charcoal (`#0F172A`) for the sidebar, off-white (`#F8FAFC`) for the main background.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 2.2: Verify Sidebar Navigation & Interactivity**
*   **Action:** 
    1. Check if all required links (Dashboard, Services, Categories, Portfolio Projects, Testimonials, Inquiries) are present in the sidebar.
    2. Resize the browser window to mobile width (e.g., iPhone screen).
    3. Click the hamburger menu icon in the top navigation bar.
*   **Expected Result:** 
    1. Links are visible with appropriate icons (SVG).
    2. The sidebar hides by default on small screens.
    3. The hamburger menu successfully toggles the sidebar visibility on and off (via Alpine.js).
*   **Status:** [ ] Pass / [x] Fail

**Scenario 2.3: Verify Statistical Cards & Data Accuracy**
*   **Action:** On the `/dashboard` page, look at the three statistical cards at the top of the main content area. Compare the numbers to the actual database row counts using `php artisan tinker`.
*   **Expected Result:** 
    *   **Total Services** card displays the correct number of services (`App\Models\Service::count()`).
    *   **Portfolio Projects** card displays the correct number of projects (`App\Models\PortfolioProject::count()`).
    *   **New Inquiries** card displays the correct number of unread inquiries (`App\Models\Inquiry::where('is_read', false)->count()`).
    *   The "Welcome Back" message correctly displays the logged-in admin's name.
*   **Status:** [x] Pass / [ ] Fail

## 3. CRUD Operations

**Scenario 3.1: Services Management**
*   **Action:** Go to "Services" from the sidebar. Verify the list. Try creating a new one, editing an existing one, and deleting a dummy service.
*   **Expected Result:** The list matches database rows. Creating, Editing, and Deleting result in successful creation/modification/removal of the DB row and UI redirects with a success flash message.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 3.2: Project Categories Management**
*   **Action:** Go to "Categories" from the sidebar. Add a new category -> 'Cloud Navigation'. Verify the Slug is auto-generated in the controller logic. Edit it, then delete it. Attempt to delete a category that already has projects.
*   **Expected Result:** Adding, Editing, and Deleting work correctly. Attempting to delete a category that has attached projects is blocked and displays an error flash message.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 3.3: Portfolio Projects Management**
*   **Action:** Go to "Portfolio Projects" from the sidebar. Add a new project by combining the categories logic, text descriptions, and a comma-separated tech stack. Test the "is_featured" toggle.
*   **Expected Result:** The project is created properly. Tech stack strings are converted into JSON arrays in the DB and retrieved successfully during editing.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 3.4: Testimonials Management**
*   **Action:** Go to "Testimonials" from the sidebar. Add a new testimonial with a 5-star rating. Edit an existing one and change its rating. Delete a testimonial.
*   **Expected Result:** Rating updates successfully display the proper number of SVG stars in the Index view. CRUD operations act as expected.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 3.5: Inquiries Management**
*   **Action:** Go to "Inquiries" from the sidebar. Look for the "Unread" badges on the sidebar and within the table layout. Click "View" on an inquiry. Check the database/Index to see if it changed to "Read". Click "Mark as Unread" in the view pane. Delete an inquiry.
*   **Expected Result:** Visiting the Show view auto-marks inquiries as Read (`is_read = true`). The sidebar unread badge updates or disappears correctly without hard page refreshes (handled Server-Side via Blade). "Mark as Unread" toggler works.
*   **Status:** [x] Pass / [ ] Fail

---
**Testing Performed By:** ___________________________
**Date:** ___________________________
**Sign-off:** ___________________________
