<!-- Modal for Event Modification -->
<div id="editEventModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-gray-800 p-6 rounded-lg w-1/3 mx-auto mt-20">
        <h2 class="text-2xl font-bold mb-4 text-white">Edit Event</h2>
        <form id="editEventForm">
            <input type="hidden" id="editEventId" name="eventId">
            <div class="mb-4">
                <label for="editTitle" class="block text-white">Title</label>
                <input type="text" id="editTitle" name="title" class="w-full p-2 bg-gray-700 text-white rounded">
            </div>
            <div class="mb-4">
                <label for="editDescription" class="block text-white">Description</label>
                <textarea id="editDescription" name="description" class="w-full p-2 bg-gray-700 text-white rounded"></textarea>
            </div>
            <div class="mb-4">
                <label for="editLocation" class="block text-white">Location</label>
                <input type="text" id="editLocation" name="location" class="w-full p-2 bg-gray-700 text-white rounded">
            </div>
            <div class="mb-4">
                <label for="editDate" class="block text-white">Date</label>
                <input type="datetime-local" id="editDate" name="date" class="w-full p-2 bg-gray-700 text-white rounded">
            </div>
            <div class="mb-4">
                <label for="editPrice" class="block text-white">Price</label>
                <input type="number" id="editPrice" name="price" step="0.01" class="w-full p-2 bg-gray-700 text-white rounded">
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="closeEditModal()" class="bg-gray-600 text-white px-4 py-2 rounded mr-2">Cancel</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Changes</button>
            </div>
        </form>
    </div>
</div>
<h2 class="text-2xl font-bold mb-4 text-white">Manage Events</h2>
<table class="min-w-full bg-gray-900 border border-gray-700">
    <thead class="bg-gray-800">
        <tr>
            <th class="py-2 px-4 border-b border-gray-700 text-white">ID</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Organizer Name</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Title</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Description</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Location</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Date</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Price</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Status</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Created At</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Actions</th>
        </tr>
    </thead>
    <tbody id="eventTableBody" class="text-gray-300">
    </tbody>
</table>

<script>
    $(document).ready(function() {
        fetchEvents();
    });

    function fetchEvents() {
    $.ajax({
        url: "/admin/events",
        type: "GET",
        dataType: "json",
        success: function(events) {
          console.log(events);
            let rows = "";
            events.forEach(event => {
              console.log("Event Data:", event);  
              console.log("Event ID (eventsid):", event.eventsid);  
                 rows += `
                    <tr class="hover:bg-gray-800">
                        <td class="py-2 px-4 border-b border-gray-700">${event.eventsid}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${event.organizername}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${event.title}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${event.description}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${event.location}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${event.date}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${event.price}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${event.status}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${event.created_at}</td>
                      <td class="py-2 px-4 border-b border-gray-700">
                        <a href='javascript:void(0);' onclick='validateEvent("${event.eventsid}")' class="text-green-400 hover:text-green-300">Validate</a> | 
                        <a href='javascript:void(0);' onclick='refuseEvent(${event.eventsid})' class="text-red-400 hover:text-red-300">Refuse</a> | 
                        <a href='javascript:void(0);' onclick='deleteEvent(${event.eventsid})' class="text-red-400 hover:text-red-300">Delete</a> |
                        <a href='javascript:void(0);' onclick='openEditModal(${event.eventsid}, "${event.title}", "${event.description}", "${event.location}", "${event.date}", ${event.price})' class="text-yellow-400 hover:text-yellow-300">Edit</a>
                    </td>
                        
                    </tr>`;
            });
            $("#eventTableBody").html(rows);
        },
        error: function() {
            alert("Error fetching eventss");
        }
    });
}

function validateEvent(eventId) {
    $.ajax({
        url: `/admin/events/validate`,  
        type: "POST",
        data: { eventId: eventId , status: 'approved'},

        success: function(events) {
            console.log("Response:", events);
            // if (events && events.message) {
            //     alert(events.message);
            // } else {
            //     alert("Unexpected response from server.");
            // }
            fetchEvents();
        },
        error: function() {
            alert("Error fetching events.");
        }
    });
}
function refuseEvent(eventId) {
     if (!confirm("Are you sure you want to refuse this event?")) return;
     $.ajax({
        url: `/admin/events/refused`,  
        type: "POST",
        data: { eventId: eventId , status: 'refused'},

        success: function(success) {
            console.log("Response:", success);
            // if (events && events.message) {
            //     alert(events.message);
            // } else {
            //     alert("Unexpected response from server.");
            // }
            fetchEvents();
        },
        error: function() {
            alert("Error fetching events.");
        }
    });
   
}

function deleteEvent(eventId) {
     if (!confirm("Are you sure you want to delete this event?")) return;
    $.ajax({
        url: `/admin/events/delete`,
        type: "POST",
        data: { eventId: eventId },

        success: function(success) {
            console.log("Response:", success); 
            alert(success.message);
            fetchEvents();
        },
        error: function(xhr, status, error) {
            console.error("Error:", error); 
            alert("Error deleting event.");
        }
    });
}
 function openEditModal(eventId, title, description, location, date, price) {
    document.getElementById('editEventId').value = eventId;
    document.getElementById('editTitle').value = title;
    document.getElementById('editDescription').value = description;
    document.getElementById('editLocation').value = location;
    document.getElementById('editDate').value = date;
    document.getElementById('editPrice').value = price;
    document.getElementById('editEventModal').classList.remove('hidden');
}

 function closeEditModal() {
    document.getElementById('editEventModal').classList.add('hidden');
}

 document.getElementById('editEventForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const eventId = document.getElementById('editEventId').value;
    const title = document.getElementById('editTitle').value;
    const description = document.getElementById('editDescription').value;
    const location = document.getElementById('editLocation').value;
    const date = document.getElementById('editDate').value;
    const price = document.getElementById('editPrice').value;

    $.ajax({
        url: `/admin/events/update`,
        type: "POST",
        data: {
            eventId: eventId,
            title: title,
            description: description,
            location: location,
            date: date,
            price: price
        },
        success: function(success) {
            const response = JSON.parse(success)
            console.log("Response:", response);
           
                alert(response.message);
                closeEditModal();
                fetchEvents();  
            
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
            alert("Error updating eventssss");
        }
    });
});
</script>