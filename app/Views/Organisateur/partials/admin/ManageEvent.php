<!-- Modal for Event Modification -->
<div id="editEventModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50">
    <div class="bg-gray-800 mx-auto mt-20 p-6 rounded-lg w-1/3">
        <h2 class="mb-4 font-bold text-white text-2xl">Edit Event</h2>
        <form id="editEventForm">
            <input type="hidden" id="editEventId" name="eventId">
            <div class="mb-4">
                <label for="editTitle" class="block text-white">Title</label>
                <input type="text" id="editTitle" name="title" class="bg-gray-700 p-2 rounded w-full text-white">
            </div>
            <div class="mb-4">
                <label for="editDescription" class="block text-white">Description</label>
                <textarea id="editDescription" name="description" class="bg-gray-700 p-2 rounded w-full text-white"></textarea>
            </div>
            <div class="mb-4">
                <label for="editLocation" class="block text-white">Location</label>
                <input type="text" id="editLocation" name="location" class="bg-gray-700 p-2 rounded w-full text-white">
            </div>
            <div class="mb-4">
                <label for="editDate" class="block text-white">Date</label>
                <input type="datetime-local" id="editDate" name="date" class="bg-gray-700 p-2 rounded w-full text-white">
            </div>
            <div class="mb-4">
                <label for="editPrice" class="block text-white">Price</label>
                <input type="number" id="editPrice" name="price" step="0.01" class="bg-gray-700 p-2 rounded w-full text-white">
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="closeEditModal()" class="bg-gray-600 mr-2 px-4 py-2 rounded text-white">Cancel</button>
                <button type="submit" class="bg-blue-500 px-4 py-2 rounded text-white">Save Changes</button>
            </div>
        </form>
    </div>
</div>
<h2 class="mb-4 font-bold text-white text-2xl">Manage Events</h2>
<table class="bg-gray-900 border border-gray-700 min-w-full">
    <thead class="bg-gray-800">
        <tr>
            <th class="px-4 py-2 border-gray-700 border-b text-white">ID</th>
            <th class="px-4 py-2 border-gray-700 border-b text-white">Organizer Name</th>
            <th class="px-4 py-2 border-gray-700 border-b text-white">Title</th>
            <th class="px-4 py-2 border-gray-700 border-b text-white">Description</th>
            <th class="px-4 py-2 border-gray-700 border-b text-white">Location</th>
            <th class="px-4 py-2 border-gray-700 border-b text-white">Date</th>
            <th class="px-4 py-2 border-gray-700 border-b text-white">Price</th>
            <th class="px-4 py-2 border-gray-700 border-b text-white">Status</th>
            <th class="px-4 py-2 border-gray-700 border-b text-white">Created At</th>
            <th class="px-4 py-2 border-gray-700 border-b text-white">Actions</th>
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
        success: function(data) {
          console.log(data);
            let rows = "";
            data.forEach(event => {
                
              console.log("Event Data:", event);  
              console.log("Event ID (eventsid):", event.id);  
                 rows += `
                    <tr class="hover:bg-gray-800">
                        <td class="px-4 py-2 border-gray-700 border-b">${event.id}</td>
                        <td class="px-4 py-2 border-gray-700 border-b">${event.organizername}</td>
                        <td class="px-4 py-2 border-gray-700 border-b">${event.title}</td>
                        <td class="px-4 py-2 border-gray-700 border-b">${event.description}</td>
                        <td class="px-4 py-2 border-gray-700 border-b">${event.ville}</td>
                        <td class="px-4 py-2 border-gray-700 border-b">${event.date}</td>
                        <td class="px-4 py-2 border-gray-700 border-b">${event.price}</td>
                        <td class="px-4 py-2 border-gray-700 border-b">${event.eventsstatus}</td>
                        <td class="px-4 py-2 border-gray-700 border-b">${event.created_at}</td>
                      <td class="px-4 py-2 border-gray-700 border-b">
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