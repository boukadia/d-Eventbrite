<!-- Abstract Class vs Interface – Which One to Use?
Since both admin and organizer can manage events but have different responsibilities, you should use an abstract class instead of an interface.

✅ Why an Abstract Class?
You have common methods (getEvents(), createEvent(), etc.).
Both controllers share logic but can have extra methods (e.g., Admin manages users).
An abstract class allows code reuse, while an interface only defines method signatures without logic.
1️⃣ Abstract Class for Event Management (AbstractEventController.php)
php
Copier
Modifier -->
<?php
namespace Core\Events;

abstract class AbstractEventController {
    // Common methods shared by Admin and Organizer
    public function getEvents() {
        // Logic to fetch events
    }

    public function getEvent($id) {
        // Logic to fetch a single event
    }

    public function createEvent($request) {
        // Logic to create an event
    }

    public function updateEvent($request, $id) {
        // Logic to update an event
    }

    public function deleteEvent($id) {
        // Logic to delete an event
    }

    // Abstract method (each child class must implement this)
    abstract public function getAllEvents();
}
2️⃣ Admin Controller Extends the Abstract Class
The admin has extra responsibilities (managing users, approving events).

php
Copier
Modifier
<?php
namespace App\Controllers;

use Core\Events\AbstractEventController;

class AdminController extends AbstractEventController {
    public function getAllEvents() {
        // Admin sees all events
    }

    public function manageUsers() {
        // Extra method for managing users
    }
}
3️⃣ Organizer Controller Extends the Abstract Class
The organizer only manages their own events.

php
Copier
Modifier
<?php
namespace App\Controllers;

use Core\Events\AbstractEventController;

class OrganizerController extends AbstractEventController {
    public function getAllEvents() {
        // Organizer only sees their own events
    }

    public function getEventByOrganizer($id) {
        // Fetch events belonging to the specific organizer
    }
}
Final Thoughts
✅ Use an abstract class for shared logic.
✅ Each controller inherits from the abstract class and adds its own methods.
✅ This keeps your code clean, reusable, and easy to maintain.
Let me know if you need improvements! 🚀