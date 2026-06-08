
# Menstrual and Qada Tracker System
## Group Members
**Alya Qistina Nadia binti Idris (231134)**
* Leader
* Setup Laravel project 
* Configure GitHub repository
* Manage backend integration
* Assist route integration
* Create navbar/footer
* Manage website theme/layout
* Handle Blade template layout
* Display prayer times on dashboard
* Display reminder notifications
* Handle API frontend display
* Handle loading/error messages

**Putri Nur Batrisyia binti Azizul (2412444)**
* Design database tables
* Create ERD
* Create Sequence Diagram
* Setup MySQL database
* Create Laravel migrations
* Develop Eloquent Models
* Setup foreign keys and relationships
* Design landing page/homepage
* Design login page
* Design register page
* Create authentication forms
* Style input forms using Tailwind CSS
* Connect forms with backend routes
* Connect Laravel with JAKIM API
* Implement responsive layout for multiple pages
  
**Wan Nur Hanees binti Wan Shukri (2415978)**
* Create CRUD backend functions
* Create period controller
* Setup CRUD routes
* Create validation logic
* Store/retrieve period records
* Design dashboard layout
* Create cycle summary section
* Create history page UI
* Display records dynamically
* Process JSON response
* Extract prayer time data
* Format prayer information

**Wan Nur Insyirah binti Wan Rosli (2410848)**
* Create qada’ prayer logic
* Create hari suci calculation
* Create next cycle prediction logic
* Build calculation functions
* Design calendar tracker
* Display prediction section
* Design prayer reminder section
* Compare period time with prayer time
* Determine qada’ prayer needed
* Test calculation accuracy

## 1. Introduction

SuciTrack is a specialized, Laravel-based web application cater assist Muslim women in tracking their menstrual cycles (Hayd) and periods of purity (Tuhr) in strict accordance with Shariah (Islamic jurisprudence) guidelines.

Navigating the complexities of Islamic rulings regarding prayer (Salah) during and after menstruation can be challenging. SuciTrack addresses this by replacing manual calculations with an automated, reliable digital solution. By combining the robust Model-View-Controller (MVC) architecture of Laravel with precise jurisprudential logic, the platform empowers users to maintain the five daily prayers and accurately manage their religious obligations.

## 2. Problem Statement & Objectives

### 2.1 Problem Statement
Many contemporary period tracking applications are designed purely from a medical or lifestyle perspective. They lack the specific logical parameters required to determine Islamic purity, such as tracking the exact duration of a valid period, identifying irregular bleeding (Istihadah), or calculating missed prayers that require replacement (Qada'). This leaves users to manually calculate their end period time, often leading to confusion regarding their validation for acts of worship.

### 2.2 Project Objectives
- Provide an interactive website for users to login, view, and manage their current and historical cycle data.
- Eliminate manual calculation errors by automating the determination of purity days, valid menstruation days.
- Support users in fulfilling their religious duties by implementing a structured system to track and notify Qada'(missed) prayers.

## 3. System Architecture

### 3.1 Core Features
- Secure user authentication through registration and login systems to ensure user data protection and privacy.
- Menstrual Records Management (CRUD) Create, Read, Update, and Delete capabilities allowing users to log start/end times.
- A visual featuring current cycle status, days of purity, unresolved qada' prayers, zone selection based on systemic calculations.
- Historical trends, predictive modeling for future cycles to inform users.

### 3.2 Technical
Backend Framework: 
- Laravel (PHP)
- JavaScript

Frontend Interface: 
- Blade Templating Engine, 
- Tailwind CSS (augmented with Livewire for real-time reactivity)

Database: 
- MySQL

## 4. Features & Functionalities

### 4.1 User Authentication
The system provides a secure authentication mechanism that allows users to create accounts, log in and access their personal menstrual tracking data. Authentication is implemented using Laravel's built-in authentication system to ensure user privacy and data security.

**Functions:**

- User registration
- User login
- User logout
- Session management
- User data protection

### 4.2 Menstrual Records Management
SuciTrack allows users to manage menstrual cycle records through a complete Create, Read, Update and Delete (CRUD) system. Users can record the start and end dates of their menstrual periods, enabling the system to calculate cycle-related information automatically.

**Functions:**

- Add new menstrual records
- View menstrual history
- Edit existing records
- Delete records
- Store cycle duration information
- Track purity periods (Tuhr)

### 4.3 Prayer Time Integration
The system integrates with JAKIM Prayer Time API to retrieve accurate prayer schedules based on selected zones. This ensures that prayer-related calculations are aligned with official Malaysian prayer times.

**Functions:**

- Retrieve prayer times from JAKIM API
- Display daily prayer schedule
- Support prayer zone selection
- Update prayer information dynamically

### 4.4 Dashboard Monitoring
A centralized dashboard provides users with an overview of their menstrual status and related information. Important cycle information is displayed in organized and user-friendly interface.

**Functions:**

- Display current menstrual status
- Display recorded cycle information
- Display history of menstrual records
- Predict next menstrual cycle
- Show prayer-related information
- Quick access to system features and modules

### 4.5 Qada' Prayer Tracking
Qada' module assists users in identifying prayers that may need to be replaced due to menstrual periods. The system supports the management and monitoring of qada' prayer records.

**Functions:**

- Record qada' prayer information
- Manage qada' prayer records
- Display qada' prayer status

### 4.6 Responsive User Interface
This application is designed using Tailwind CSS and Blade templates to provide a clean and responsive user experience across different devices.

**Functions:**

- Responsive page layout
- Modern user interface
- Consistent navigation design
- Mobile-friendly display
- Interactive forms and components

## 5. Entity Relationship Diagram (ERD)

<p align="center">
    <img src="public/images/ERD_SuciTrack.png" width="350">
</p>

<p align="center">
    <b>Figure 1: Entity Relationship Diagram (ERD) of SuciTrack</b>
</p>

The database consists of two main entities: USERS and MENSTRUAL_RECORDS. 
A one-to-many relationship exists between the tables, where one user can create multiple menstrual records while each menstrual record belongs to only one user.

## 6. Sequence Diagram

<p align="center">
    <img src="public/images/SequenceDiagram.png" width="800">
</p>

<p align="center">
    <b>Figure 2: Sequence Diagram of SuciTrack</b>
</p>

The sequence diagram illustrates the interaction between the user, SuciTrack system, database, and JAKIM API. The process begins when a user registers an account and logs into the system. The application then verifies the user's credentials through the database before granting access to the dashboard. When a menstrual record is created, the system stores the record in the database and retrieves prayer time information from the JAKIM API based on the selected zone. The processed data is then displayed on the dashboard, allowing users to monitor their menstrual cycle information and prayer-related records through a centralized interface.

## 7. User Interface (Completed System)
<img width="1837" height="893" alt="image" src="https://github.com/user-attachments/assets/249a5d1d-3d5c-42f4-8137-b145410762e3" />
<img width="1917" height="972" alt="4" src="https://github.com/user-attachments/assets/9766bf1e-4ace-4c57-bfd6-91c8cfbc26b8" />
<img width="1917" height="966" alt="5" src="https://github.com/user-attachments/assets/81f7445a-f717-4922-a2d0-76a4c8301a22" />
<img width="1917" height="966" alt="6" src="https://github.com/user-attachments/assets/a49d8a6e-914b-46e6-b73f-b20fa6d77b97" />
<img width="1917" height="967" alt="10" src="https://github.com/user-attachments/assets/9d683122-b7c8-4025-959c-3cf5ca76da47" />
<img width="1917" height="971" alt="11" src="https://github.com/user-attachments/assets/6d5b0b77-b696-42fd-b618-c6b4f9c03953" />
<img width="1917" height="967" alt="8" src="https://github.com/user-attachments/assets/031e4407-645b-4102-b162-ee9ea623d32b" />
<img width="1917" height="967" alt="9" src="https://github.com/user-attachments/assets/31abfb4b-3d0e-473f-a937-04388ef04aa4" />
<img width="1917" height="962" alt="12" src="https://github.com/user-attachments/assets/b184c046-1257-474b-8e55-1327535878d7" />




## 8. Implementation Details
### routes.web.php
<img width="1004" height="909" alt="image" src="https://github.com/user-attachments/assets/481eace6-a77d-485b-812f-29e0c1dd4733" />

### Routes Configuration Explanation
The 'web.php' file in Laravel defines the web routes of the application. Routes determine how incoming HTTP requests are handled and which controller methods or views are returned. In this project, the routes are organized into two main categories: **public routes** and **authenticated routes**.

1. **Public Route**  
   - The root URL ('/') is mapped to the 'landing' view.  
   - This serves as the public homepage, accessible to all users without authentication.

2. **Authenticated Routes**  
   - These routes are grouped under middleware 'auth' and 'verified', ensuring only logged in and email-verified users can access them.  
   - Key routes include:
     - **Dashboard**: '/dashboard' calls 'DashboardController@index' and displays the main user dashboard.  
     - **Menstrual Records**:  
       - '/menstrual_records/end' calls 'MenstrualController@endCycle' to mark the end of a cycle.  
       - 'Route::resource('menstrual_records', MenstrualController::class)' automatically generates full CRUD operations (create, read, update, delete) for menstrual records.  
     - **Qada Page**: '/qada' calls 'QadaController@index' to display the Qada (missed prayers) page.  
     - **Complete Qada**: '/dashboard/complete-qada/{id}' is a POST route that calls 'DashboardController@completeQada' to mark a specific Qada entry as completed.

3. **Authentication Routes**  
   - The file also includes 'auth.php', which contains all authentication-related routes such as login, registration, and password reset.

### Controller
### MenstrualController

<img width="874" height="895" alt="Screenshot 2026-06-08 015746" src="https://github.com/user-attachments/assets/183483ee-f154-48f6-ba4c-dab69987a094" />
<img width="773" height="896" alt="Screenshot 2026-06-08 015728" src="https://github.com/user-attachments/assets/ff8c6240-8761-43a0-84a9-293fee1ec9ae" />
<img width="859" height="916" alt="Screenshot 2026-06-08 015716" src="https://github.com/user-attachments/assets/5e549d5a-4fc7-4e98-8993-6d8eccef7e34" />
<img width="856" height="881" alt="Screenshot 2026-06-08 015659" src="https://github.com/user-attachments/assets/9d0e59a1-7827-4b6a-8c9a-ae1336995461" />
<img width="871" height="907" alt="Screenshot 2026-06-08 015641" src="https://github.com/user-attachments/assets/bad3c0a4-57cb-459a-a08c-7ee64782e80e" />
<img width="896" height="684" alt="Screenshot 2026-06-08 015813" src="https://github.com/user-attachments/assets/6aa0e914-3148-492a-9fa6-7042399b0c25" />
<img width="760" height="909" alt="Screenshot 2026-06-08 015759" src="https://github.com/user-attachments/assets/99e2f990-c2ac-4133-908a-ffbb3a5a69f6" />

### MenstrualController Explanation

The MenstrualController manages all menstrual cycle records and integrates them with Qada (missed prayers) tracking. It provides CRUD operations, cycle management, and a dashboard view for users.

1. **Index**  
   - Retrieves all menstrual records for the authenticated user, ordered by start date.  
   - Displays them in the `menstrual_records.index` view.

2. **Create & Store**  
   - create() shows a form to start a new cycle.  
   - store() validates input, saves a new record with 'start_datetime', and sets 'end_datetime' as null until the cycle ends.

3. **Edit & Update**  
   - edit() loads a specific record for editing.  
   - update() validates the 'end_datetime', updates the record, deletes old Qada logs, and regenerates Qada entries using the **Qada Engine**.

4. **Destroy**  
   - Deletes a menstrual record and its associated Qada logs.

5. **Dashboard**  
   - Shows the user’s current cycle status ('activeRecord'), whether they are clean ('isClean'), number of purity days since last cycle, and counts of pending and completed Qada prayers.

6. **Qada Engine**  
   - 'generateQada()' calculates missed prayers during the menstrual period.  
   - It fetches prayer times via the **Aladhan API**, checks which prayers fall within the cycle, and auto-generates Qada logs for them.

7. **End Cycle**  
   - Redirects the user to edit the latest active cycle.  
   - If no active cycle exists, it shows an error message.
  
### DashboardController
<img width="802" height="919" alt="Screenshot 2026-06-08 020825" src="https://github.com/user-attachments/assets/2e5986a4-acda-42e6-9792-2d745d39410a" />
<img width="801" height="897" alt="Screenshot 2026-06-08 020815" src="https://github.com/user-attachments/assets/a06d11f9-9995-4404-b697-99883c7d1c2d" />
<img width="874" height="913" alt="Screenshot 2026-06-08 020802" src="https://github.com/user-attachments/assets/0c67ed83-292b-4ceb-8aee-a447741b5bf8" />
<img width="906" height="912" alt="Screenshot 2026-06-08 020753" src="https://github.com/user-attachments/assets/ab8bc85b-02a0-4d67-8f87-cefb6e3900ce" />
<img width="814" height="917" alt="Screenshot 2026-06-08 020736" src="https://github.com/user-attachments/assets/4626da62-ae05-43b1-a551-ce07cf98da77" />
<img width="913" height="918" alt="Screenshot 2026-06-08 020726" src="https://github.com/user-attachments/assets/461b5b1e-0cb7-4a6f-a3de-8afa32dd2619" />
<img width="804" height="907" alt="Screenshot 2026-06-08 020714" src="https://github.com/user-attachments/assets/f38ddaa0-01b1-4ac7-8f89-e33530306a33" />
<img width="713" height="473" alt="Screenshot 2026-06-08 020835" src="https://github.com/user-attachments/assets/4f4f5f23-2959-4c8d-8a43-24aad9cb4889" />

### DashboardController Explanation

The 'DashboardController' is responsible for displaying the main dashboard, summarizing menstrual cycle status, purity days, prayer times, and Qada (missed prayers) tracking.

1. **Index Method**  
   - Retrieves the latest menstrual records for the authenticated user.  
   - **Purity Logic**: Calculates `daysOfPurity` (days between cycles or since last ended cycle) and determines whether the user is currently clean (`isClean`).  
   - **Prayer Times**: Fetches today’s prayer times from the WaktuSolat API, with fallback static values if the API fails.  
   - **Qada Calculation**: Iterates through menstrual records to count missed prayers during cycles, then subtracts completed Qada logs to show pending totals.  
   - **Pending Qada**: Retrieves all incomplete Qada logs, ordered by date, and counts them.  
   - **Next Prayer**: Determines the upcoming prayer based on current time, ensuring correct fallback after midnight.  
   - Passes all computed data (`activeRecord`, `daysOfPurity`, `isClean`, `prayer`, `final`, `pendingQadaItems`, etc.) to the `dashboard` view.

2. **Complete Qada**  
   - Marks a specific Qada log as completed by updating its status.  
   - Redirects back to the dashboard with a success message.

3. **getTodayPrayerTimes**  
   - Calls the WaktuSolat API (`https://api.waktusolat.app/v2/solat/KUL`) to fetch prayer times for Kuala Lumpur.  
   - Extracts today’s timings (Subuh, Zohor, Asar, Maghrib, Isya) and returns them in a simplified format.  
   - Returns `null` if the API fails or data is missing.

### QadaController
<img width="748" height="920" alt="Screenshot 2026-06-08 021840" src="https://github.com/user-attachments/assets/95f93ef8-f4c3-438c-9ca0-51155467c52c" />
<img width="726" height="910" alt="Screenshot 2026-06-08 021830" src="https://github.com/user-attachments/assets/b415d916-05ae-4ab0-9392-621bd8ffb36b" />
<img width="1024" height="890" alt="Screenshot 2026-06-08 021755" src="https://github.com/user-attachments/assets/89990221-e45a-4c18-97a1-fe53365bb72f" />

### QadaController Explanation

1. **Index**  
   - Retrieves all Qada logs for the authenticated user, ordered by date.  
   - Calculates the number of pending (`is_completed = false`) and completed (`is_completed = true`) Qada prayers.  
   - Passes this data to the `indexqada` view for display.

2. **Create & Store**  
   - `create()` shows a form to add a new Qada log.  
   - `store()` validates input (`prayer_type`, `qada_date`), then creates a new log with default `is_completed = false`.  
   - Redirects to the index with a success message.

3. **Show**  
   - Displays details of a specific Qada log in the `showqada` view.

4. **Edit & Update**  
   - `edit()` loads a Qada log for editing.  
   - `update()` modifies the log’s attributes (`prayer_type`, `qada_date`, `is_completed`, `notes`).  
   - Redirects back with a success message.

5. **Destroy**  
   - Deletes a specific Qada log.  
   - Redirects to the index with confirmation.
  
### PrayerController 
<img width="1057" height="913" alt="Screenshot 2026-06-08 022338" src="https://github.com/user-attachments/assets/b7c65820-c6e9-405a-94e6-dcbea0d6c6fd" />
<img width="1036" height="784" alt="Screenshot 2026-06-08 022346" src="https://github.com/user-attachments/assets/5be4d9b8-23fb-4d17-bc4c-f518172152e6" />

### PrayerController Explanation

The `PrayerController` handles the retrieval and display of daily prayer times, as well as determining the next upcoming prayer for the user. It integrates with an external API to ensure accurate timings.

1. **Index Method**  
   - Calls the **Aladhan API** (`https://api.aladhan.com/v1/timingsByCity`) to fetch prayer times for Rawang, Malaysia.  
   - Extracts the five obligatory prayers: Fajr, Dhuhr, Asr, Maghrib, and Isha.  
   - Converts these times into **Carbon objects** bound to the Malaysia timezone (`Asia/Kuala_Lumpur`) for real-time comparison.  
   - Determines the **next prayer** by checking which prayer time is still upcoming compared to the current time. Defaults to Fajr if all prayers for the day have passed.  
   - Provides localized labels (Subuh, Zohor, Asar, Maghrib, Isyak) for display.  
   - Passes the prayer times, next prayer, and labels to the `menstrual_records.dashboard` view.
  
### Model
### MenstrualRecord.php
<img width="660" height="602" alt="image" src="https://github.com/user-attachments/assets/49e2bda1-dcf4-4e44-a174-40ca510cd900" />

### MenstrualRecord Model Explanation

The `MenstrualRecord` model represents menstrual cycle data in the application. It is an **Eloquent ORM model** that maps directly to the `menstrual_records` database table and defines the attributes and relationships used in the system.

1. **Fillable Attributes**  
     - `user_id` → links the record to a specific user.  
     - `start_datetime` → the date and time when the cycle begins.  
     - `end_datetime` → the date and time when the cycle ends.  
     - `duration_days` → stores the calculated length of the cycle in days.  
   - This protects against mass-assignment vulnerabilities by explicitly allowing only these fields.

2. **Relationship**  
   - Defines a `belongsTo` relationship with the `User` model.  
   - This means each menstrual record is associated with exactly one user, enabling queries like `$record->user` to retrieve the owner of the record.

3. **HasFactory Trait**  
   - The `HasFactory` trait allows the use of Laravel’s model factories for testing and seeding data.  
   - This makes it easier to generate sample menstrual records during development.
  
### QadaLog.php
<img width="688" height="914" alt="image" src="https://github.com/user-attachments/assets/46bb99de-4bd6-4712-b94f-e90740ce447b" />

### QadaLog Model Explanation

The `QadaLog` model represents individual records of missed prayers (Qada) in the application. It is an **Eloquent ORM model** that maps to the `qada_logs` database table and defines the attributes, casting rules, and relationships needed for Qada tracking.

1. **Fillable Attributes**  
   The `$fillable` array allows mass assignment of:  
      -`user_id` → links the log to a specific user.  
      -`menstrual_record_id` → connects the log to a menstrual cycle record.  
      -`qada_date` → the date of the missed prayer.  
      -`prayer_type` → specifies which prayer (Subuh, Zohor, Asar, Maghrib, Isyak).  
      -`is_completed` → boolean flag indicating if the Qada has been performed.  
      -`notes` → optional remarks or context.

2. **Relationships**  
    -`user()` → defines a `belongsTo` relationship with the `User` model, linking each Qada log to its owner.  
    -`menstrualRecord()` → defines a `belongsTo` relationship with the `MenstrualRecord` model, connecting Qada logs to the cycle that generated them.

### Reminder.php
<img width="554" height="539" alt="image" src="https://github.com/user-attachments/assets/a9c4c948-77e7-46b4-b35b-6554aaf11a6c" />

### Reminder Model Explanation

The `Reminder` model represents  reminders in the application. It is an **Eloquent ORM model** that maps to the `reminders` table and defines the attributes and relationships needed for notification management.

This model provides a simple yet effective way to manage user notifications. By linking reminders to users, it ensures that important messages are delivered and monitored.

### User.php
<img width="632" height="870" alt="Screenshot 2026-06-08 024629" src="https://github.com/user-attachments/assets/f7ee0907-e1cb-46d2-afa1-fa29be4e913c" />
<img width="715" height="906" alt="Screenshot 2026-06-08 024620" src="https://github.com/user-attachments/assets/c836b76c-c035-4df8-8cb6-ef44da4bfb5e" />

### User Model Explanation

The `User` model represents the people who use the application. It is built on Laravel’s authentication system, which handles login, registration, and security.  

- **Basic Information**  
  Stores the user’s `name`, `email`, and `password`. Sensitive fields like `password` and `remember_token` are hidden for security.  

- **Authentication Features**  
  Supports login and API tokens (via Sanctum), and allows notifications to be sent to users.  

- **Data Casting**  
  Automatically converts `email_verified_at` into a date and ensures `password` is securely hashed.  

- **Relationships**  
  - A user can have many **menstrual records** (`hasMany` relationship).  
  - A user can have many **reminders** (`hasMany` relationship).
  
### View

### calendar > index.blade.php
<img width="774" height="781" alt="Screenshot 2026-06-08 081834" src="https://github.com/user-attachments/assets/b600da85-7e64-4f06-8ec2-31b9c7118bb3" />

index.blade.php inside the **calendar** folder is responsible for displaying the menstrual cycle data in a visual calendar format using the FullCalendar JavaScript library.

1. **Calendar Container**
    - The <div id="calendar"></div> acts as the placeholder where the FullCalendar library renders the calendar UI.
    - This is where all menstrual cycle events will be dynamically displayed.
  
2. **FullCalendar Integration**
    - The page imports FullCalendar via CDN:
        - CSS for styling
        - JavaScript for functionality
    - The calendar is initialized when the page finishes loading using DOMContentLoaded

### landing.blade.php
<img width="719" hei ght="517" alt="Screenshot 2026-06-08 062505" src="https://github.com/user-attachments/assets/2af798a3-69d2-4b82-8c13-48ee34686b11" />
<img width="700" height="944" alt="Screenshot 2026-06-08 062455" src="https://github.com/user-attachments/assets/26bb01d6-f42f-4bbe-83e1-977346f1ae8a" />

landing.blade.php is the first page user sees before the login or register page. It feature showcase sections highlight 4 main system features:

- Menstrual Tracking: Records and monitors cycle history
- Prayer Monitoring: Tracks prayer obligations based on cycle status
- Qada’ Management: Manages missed and completed prayers
- Smart Reminders- Future feature for notifications and alerts

### login.blade.php
<img width="1369" height="271" alt="Screenshot 2026-06-08 061035" src="https://github.com/user-attachments/assets/b5b654e7-4370-47a7-8aa7-8587b2932cef" />
<img width="1534" height="891" alt="Screenshot 2026-06-08 061009" src="https://github.com/user-attachments/assets/f6345478-fc45-4970-b1fc-2a111c7c9edf" />
<img width="1439" height="897" alt="Screenshot 2026-06-08 060924" src="https://github.com/user-attachments/assets/8e6764dc-f27c-4069-b9a8-661803df0b68" />
<img width="1141" height="910" alt="Screenshot 2026-06-08 060907" src="https://github.com/user-attachments/assets/5dbb8235-f99a-49b7-9c93-e86627c15424" />

The login.blade.php file serves as the authentication interface of SuciTrack. It enables registered users to securely log in using their email and password, access their menstrual cycle and prayer tracking data, recover forgotten passwords, and navigate to the registration page if they need to create a new account.

### register.blade.php
<img width="864" height="927" alt="image" src="https://github.com/user-attachments/assets/e7779270-0d42-43d0-b87a-decc8262de98" />

register.blade.php is the Laravel Blade view that displays the user registration page for SuciTrack. It provides a form where new users can create an account by entering their personal information.
- **Tailwind CSS**
- Used to style the page with gradients, spacing, colors, and responsive layouts.

### create.blade.php
<img width="972" height="932" alt="image" src="https://github.com/user-attachments/assets/3d23da2a-9e89-4629-9747-e5b3597480ad" />

The create.blade.php file is responsible for displaying the New Menstrual Cycle Record form in the SuciTrack system. It allows users to record the start date and time of a new menstrual cycle.

### edit.blade.php
<img width="778" height="933" alt="image" src="https://github.com/user-attachments/assets/9d714748-49bb-4dfe-8513-90cde6121908" />

The edit.blade.php page serves as the cycle completion interface of SuciTrack. It allows users to record the end date and time of a menstrual cycle, enabling the system to calculate cycle duration, maintain menstrual history records, and support prayer tracking features that depend on menstrual status.

### index.blade.php
<img width="753" height="441" alt="Screenshot 2026-06-08 062005" src="https://github.com/user-attachments/assets/fbe55f36-5635-44e7-bc44-e0d390e4bb58" />
<img width="748" height="867" alt="Screenshot 2026-06-08 061955" src="https://github.com/user-attachments/assets/9570e1fe-0b78-403a-9f23-ca71af06d65d" />
<img width="713" height="971" alt="Screenshot 2026-06-08 061907" src="https://github.com/user-attachments/assets/fa0bee27-c399-4719-99a3-81f136ebaae6" />

The index.blade.php file is the main dashboard page for menstrual cycle records in the SuciTrack system.It allows users to:

- Start a new cycle
- End an ongoing cycle
- View full history of cycles
- Edit or delete records
- Understand current cycle status

### dashboard.blade.php
<img width="628" height="943" alt="Screenshot 2026-06-08 062225" src="https://github.com/user-attachments/assets/49b718a1-2c52-4ed5-9739-a3d4e7fb7839" />
<img width="647" height="650" alt="Screenshot 2026-06-08 062235" src="https://github.com/user-attachments/assets/a5cd3be8-aaa3-4b69-bea8-2abd438190e1" />

The dashboard.blade.php file is the main user dashboard page in the SuciTrack system. It gives users an overview of their menstrual cycle status, purity days, Qada’ prayers, and daily prayer times in one centralized interface.

### indexqada.blade.php
<img width="467" height="905" alt="Screenshot 2026-06-08 062442" src="https://github.com/user-attachments/assets/22de85bc-1ad3-4f42-ad11-20214e598704" />

This Blade file is the Qada’ (missed prayers) tracking page in the SuciTrack system. It allows users to view, monitor, and manage their missed prayers in a structured dashboard.

### navigation-menu.blade.php
<img width="802" height="943" alt="Screenshot 2026-06-08 062519" src="https://github.com/user-attachments/assets/76648d01-f5c1-47b5-86e2-906749a9fb32" />

navigation-menu.blade.php page is the main navigation bar component in the SuciTrack system. It is included in authenticated pages and provides easy navigation between key sections of the application.

This allows users to:
- Move between Dashboard and Qada pages
- View their logged-in identity
- Log out securely

## 9. Recommendation for Future Improvement

Based on the current implementation of the SuciTrack system, several improvements are proposed to enhance its functionality, usability, and scalability. These recommendations focus on improving user experience, accessibility and the overall effectiveness of the platform as both a menstrual health tracker and Islamic lifestyle support system.

**9.1 Advance Menstrual Tracking Features**
It is recommended that the system includes a more detailed menstrual health tracking module to improve the accuracy of cycle monitoring and provide deeper health insights. This feature should allow users to record daily observations related to menstrual blood characteristics.

The proposed inputs include:
- Blood colour (e.g., bright red, dark red, brown, blackish)
- Odour condition (strong and light smell)
- Flow intensity (light spotting, medium flow, heavy flow)

This enhancement will enable users to better understand their menstrual patterns over time. More importantly, it can assist in distinguishing between haid (menstruation) and istihadhah (irregular bleeding) based on consistent tracking data. Additionally, it may help users identify abnormal patterns that could indicate potential health concerns.

**9.2 Global Prayer Time Integration**
Currently, the system is assumed to rely on a single regional prayer time reference, which limits its usability for users in different geographical locations. Therefore, it is recommended to implement a global prayer time system.

This improvement may include:
- User-selectable location or city settings
- Integration with global prayer time APIs (e.g., Muslim World League, ISNA, or local Islamic authorities)
- Automatic location detection using GPS for mobile or web applications
- Support for multiple time zones

**9.3 Multi-Language Support**
The implementation of multi-language support aim to improve accessibility and inclusivity for users from different linguistic backgrounds to use the system comfortably. The proposed implementation is to include the language selection option during registration or in settings. This enhancement ensures that the system is more inclusive and user-friendly, especially for international users and Muslim communities from different regions. It also improves usability by reducing language barriers

### 10. Conclusion

In conclusion, the SuciTrack system successfully demonstrates the development of a comprehensive, web-based menstrual and Qada’ prayer tracking application tailored specifically for Muslim women. Integrating menstrual cycle management with Islamic jurisprudential requirements helps the system to address a gap that is not usually covered by conventional health tracking applications.

Through the use of Laravel’s MVC architecture, the system provides a structured and scalable backend that supports secure authentication, full CRUD operations for menstrual records and Qada’ prayer tracking logic. The integration of external APIs such as JAKIM and Aladhan enhances the accuracy of prayer time calculations, while the dashboard consolidates essential information such as cycle status, purity days and pending Qada’ prayers into a single, user-friendly interface.

Other than that, the application not only simplifies manual religious calculations but also reduces the risk of errors in determining menstrual status and missed prayers. This improves both usability and reliability for users managing religious obligations alongside personal health tracking.

In a nutshell, SuciTrack achieves its main objective of providing an automated, organized and accessible platform for menstrual and prayer tracking. With the proposed future enhancements such as advanced health tracking, global prayer time integration and multi-language support, the system has strong potential to evolve into a more inclusive and widely applicable digital solution.
