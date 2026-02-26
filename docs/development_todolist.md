# Development Todolist: Selasar Digital Website

This todolist outlines the development steps from backend dashboard creation to frontend landing page implementation, based on the project brief.

## Phase 1: Project Setup & Foundation
- [x] Initialize Laravel 12 project.
- [x] Configure frontend stack: Vite, Tailwind CSS v4, and Alpine.js.
- [x] Set up Database (MySQL) connection.
- [x] Configure Laravel Horizon + Redis for queue management (if necessary).
- [x] Configure Laravel Reverb for real-time capabilities (if necessary).
- [x] Design and run database migrations & seeders for:
  - Users (Admins)
  - Services
  - Portfolio Projects
  - Project Categories
  - Testimonials
  - Contacts / Inquiries

## Phase 2: CMS & Admin Dashboard Development
- [x] Setup Authentication (Laravel Breeze)
- [x] Dashboard UI/UX (Responsive Admin layout, Sidebar, Theme)
- [x] CRUD Operations (Services, Project Categories, Portfolio, Testimonials, Inquiries) dashboard layout (Sidebar, Navbar, main content area) using a calm, elegant theme.
- [x] **CRUD Operations (Content Management)**
  - [x] **Services Module:** Create, Read, Update, Delete core services.
  - [x] **Project Categories Module:** Manage categories (Web, Mobile, UI/UX).
  - [x] **Portfolio Module:** Manage projects, upload images, assign categories, define tech stacks, and toggle 'featured' status.
  - [x] **Testimonials Module:** Add, edit, and approve client feedback.
  - [x] **Inquiries Module:** View and manage contact form submissions.

## Phase 3: Landing Page & Frontend Development
- [x] **Global Styling & Layouts**
  - [x] Set up global color palette (Elegant & Professional Theme):
    - **Primary Base (Charcoal/Slate):** `#0F172A` (deep, modern foundation)
    - **Secondary Base:** `#334155` (for cards, secondary sections)
    - **Accent (Vibrant Blue):** `#2563EB` (for CTAs, highlights, interactions)
    - **Background:** `#F8FAFC` (clean, premium off-white)
    - **Text Content:** `#1E293B` (high-contrast, legible dark gray)
    - **Muted/Borders:** `#E2E8F0` (subtle dividers, disabled states)
  - [x] Configure global typography (Inter, Outfit, or Roboto).
  - [x] Implement reusable UI components (Buttons, Cards, Modals) featuring modern aesthetics like glassmorphism and subtle micro-animations.
  - [x] Build Main Navbar (with smooth scrolling/routing) and global Footer.
- [x] **Home Page**
  - [x] Build high-impact Hero Section with CTAs.
  - [x] Build brief "About Us" section.
  - [x] Build "Services" summary section.
  - [x] Build "Featured Portfolio" carousel (integrated with backend).
  - [x] Build "Testimonials" section (integrated with backend).
- [x] **About Us Page**
  - [x] Detail company mission, vision, core values, and team overview.
- [x] **Services Page**
  - [x] Detailed breakdown of services and technologies used.
- [x] **Portfolio Page**
  - [x] Build a filterable gallery for past projects (All, Web, Mobile, UI/UX).
  - [x] Implement detailed project views or modals.
- [x] **Contact Us Page**
  - [x] Build functional inquiry/contact form (submitting to backend).
  - [x] Add location details, email, and direct WhatsApp integration links.

## Phase 4: Testing, Optimization, & Launch
- [ ] **Quality Assurance (QA)**
  - [ ] Cross-browser testing (Chrome, Safari, Firefox, Edge).
  - [ ] Mobile responsiveness and touch interaction checks.
  - [ ] Test all forms, filtering logic, and CMS functionalities.
- [ ] **Performance & SEO**
  - [ ] Optimize images, minify CSS/JS.
  - [ ] Implement on-page SEO (meta titles, descriptions, semantic HTML).
  - [ ] Run Lighthouse audits to ensure performance score > 90.
- [ ] **Deployment**
  - [ ] Final production build (`npm run build`).
  - [ ] Deploy to production server and finalize go-live operations.
