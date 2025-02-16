<!-- Statistics Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Events -->
    <div class="bg-gradient-to-r from-indigo-500 to-blue-600 p-6 rounded-lg shadow-lg text-white transform transition-all duration-300 hover:scale-105">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold mb-2">Total Events</h2>
                <p class="text-3xl font-bold" id="total-events">0</p>
            </div>
            <i class="fas fa-calendar-alt text-4xl opacity-50"></i>
        </div>
    </div>

    <!-- Total Participants -->
    <div class="bg-gradient-to-r from-green-500 to-teal-600 p-6 rounded-lg shadow-lg text-white transform transition-all duration-300 hover:scale-105">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold mb-2">Total Participants</h2>
                <p class="text-3xl font-bold" id="total-participants">0</p>
            </div>
            <i class="fas fa-users text-4xl opacity-50"></i>
        </div>
    </div>

    <!-- Top 3 Organizers -->
    <div class="bg-gradient-to-r from-pink-500 to-red-600 p-6 rounded-lg shadow-lg text-white transform transition-all duration-300 hover:scale-105">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold mb-2">Top Organizers</h2>
                <p class="text-3xl font-bold" id="top-organizers-count">0</p>
            </div>
            <i class="fas fa-trophy text-4xl opacity-50"></i>
        </div>
    </div>

    <!-- Top 3 Events -->
    <div class="bg-gradient-to-r from-purple-500 to-pink-600 p-6 rounded-lg shadow-lg text-white transform transition-all duration-300 hover:scale-105">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold mb-2">Top Events</h2>
                <p class="text-3xl font-bold" id="top-events-count">0</p>
            </div>
            <i class="fas fa-star text-4xl opacity-50 "></i>
        </div>
    </div>
</div>

<!-- Top 3 Organizers Details -->
<div class="bg-white p-6 rounded-lg shadow-lg mb-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Top Organizers</h2>
    <div class="space-y-4" id="top-organizers-list">
        <!-- Organizers will be loaded here via AJAX -->
    </div>
</div>

<!-- Top 3 Events Details -->
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Top Events</h2>
    <div class="space-y-4" id="top-events-list">
        <!-- Events will be loaded here via AJAX -->
    </div>
</div>

<script>
    $(document).ready(function() {
         $.ajax({
            url: '/getEventStats',
            type: 'GET',
            success: function(response) {
                const stats = JSON.parse(response);

                 $('#total-events').text(stats.total_events);

                 $('#total-participants').text(stats.total_participants);

                 $('#top-organizers-count').text(stats.top_organizers.length);

                 $('#top-events-count').text(stats.top_events.length);

                 let organizersHtml = '';
                stats.top_organizers.forEach((organizer, index) => {
                    organizersHtml += `
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-200">
                            <span class="text-lg font-bold mr-4 text-gray-900">#${index + 1}</span>
                            <div>
                                <p class="font-medium text-gray-900">${organizer.name}</p>
                                <p class="text-sm text-gray-600">${organizer.event_count} events</p>
                            </div>
                        </div>`;
                });
                $('#top-organizers-list').html(organizersHtml);

                 let eventsHtml = '';
                stats.top_events.forEach((event, index) => {
                    eventsHtml += `
                        <div class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-200">
                            <span class="text-lg font-bold mr-4 text-gray-900">#${index + 1}</span>
                            <div>
                                <p class="font-medium text-gray-900">${event.title}</p>
                                <p class="text-sm text-gray-600">${event.participants} participants</p>
                            </div>
                        </div>`;
                });
                $('#top-events-list').html(eventsHtml);
            },
            error: function() {
                console.error('Error fetching statistics');
            }
        });
    });
</script>