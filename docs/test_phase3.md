# Phase 3 Testing Scenarios: Landing Page & Frontend Development

This document outlines the testing scenarios to verify that Phase 3 (Frontend routing, Views, Layouts, and dynamic data integration) of the Selasar Digital project has been completed successfully.

## 1. Global Navigation & Layout

**Scenario 1.1: Verify Desktop Navbar**
*   **Action:** Open `http://localhost:8000` on a desktop/laptop screen. Scroll down the page.
*   **Expected Result:** Navbar is sticky at the top. The background turns white/frosted (glassmorphism) when scrolling down to maintain legibility.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 1.2: Verify Mobile Hamburger Menu**
*   **Action:** Resize the browser window to mobile width (or check on a phone). Click the hamburger menu icon. Click it again to close.
*   **Expected Result:** The menu opens smoothly with a dropdown. Clicking outside or re-clicking the icon closes it. Navigation links inside work perfectly.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 1.3: Verify Footer Content**
*   **Action:** Scroll to the bottom of any page.
*   **Expected Result:** The global footer is present, displaying company info, quick links, and contact details correctly.
*   **Status:** [x] Pass / [ ] Fail

## 2. Page Routing & Rendering

**Scenario 2.1: Verify Home Page (`/`)**
*   **Action:** Navigate to `http://localhost:8000/`.
*   **Expected Result:** The page renders the Hero Section, Services overview, Featured Projects carousel/grid, and Testimonials section without errors.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 2.2: Verify About Us Page (`/about`)**
*   **Action:** Navigate to `http://localhost:8000/about` via URL or navbar link.
*   **Expected Result:** The page displays the company story, vision, and core values correctly.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 2.3: Verify Services Page (`/services`)**
*   **Action:** Navigate to `http://localhost:8000/services`.
*   **Expected Result:** A grid listing all active services from the backend database displays correctly.
*   **Status:** [x] Pass / [ ] Fail

## 3. Dynamic Data & Interactivity

**Scenario 3.1: Verify Dynamic Portfolio Filtering (`/portfolio`)**
*   **Action:** Navigate to `http://localhost:8000/portfolio`. Click on different category filter buttons (e.g., "Web", "Mobile").
*   **Expected Result:** The grid animates smoothly and filters projects based on the selected category instantly on the client side without refreshing the page. Projects from the database appear properly.
*   **Status:** [x] Pass / [ ] Fail

**Scenario 3.2: Verify Contact Form Submission (`/contact`)**
*   **Action:** 
    1. Navigate to `http://localhost:8000/contact`.
    2. Try submitting empty fields (validation should stop it).
    3. Fill out the form completely (Name, Email, Subject, Message) and click "Send Message".
*   **Expected Result:** 
    1. A success flash message appears ("Message Sent!").
    2. *Backend Verification:* Go to the Admin Dashboard (`/dashboard`) -> Inquiries. The new message should be listed with a red "Unread" badge in the sidebar.
*   **Status:** [ ] Pass / [ ] Fail

---
**Testing Performed By:** ___________________________
**Date:** ___________________________
**Sign-off:** ___________________________
