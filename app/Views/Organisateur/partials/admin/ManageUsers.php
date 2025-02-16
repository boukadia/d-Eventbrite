 
<h2 class="text-2xl font-bold mb-4 text-white">Manage Users</h2>
<table class="min-w-full bg-gray-900 border border-gray-700">
    <thead class="bg-gray-800">
        <tr>
            <th class="py-2 px-4 border-b border-gray-700 text-white">ID</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Name</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Email</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Role</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Status</th>
            <th class="py-2 px-4 border-b border-gray-700 text-white">Actions</th>
        </tr>
    </thead>
    <tbody id="userTableBody" class="text-gray-300">
    </tbody>
</table>
<script>
  $(document).ready(function() {
    fetchUsers();
});

 function fetchUsers() {
    $.ajax({
        url: "/admin/users",
        type: "GET",
        dataType: "json",
        success: function(users) {
            let rows = "";
            let ban = "ban";
            let active = "active";
            users.forEach(user => {
                rows += `
                    <tr class="hover:bg-gray-800">
                        <td class="py-2 px-4 border-b border-gray-700">${user.id}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${user.name}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${user.email}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${user.role}</td>
                        <td class="py-2 px-4 border-b border-gray-700">${user.status || 'active'}</td>
                        <td class="py-2 px-4 border-b border-gray-700">
                            <select onchange="updateUserRole(${user.id}, this.value)" class="bg-gray-700 text-white p-1 rounded">
                                <option value="participant" ${user.role === 'participant' ? 'selected' : ''}>Participant</option>
                                <option value="organisateur" ${user.role === 'organisateur' ? 'selected' : ''}>Organisateur</option>
                                <option value="admin" ${user.role === 'admin' ? 'selected' : ''}>Admin</option>
                            </select>
            ${user.status === 'active' ? 
            `<button onclick="banUser(${user.id}, 'ban')" class="bg-red-500 text-white px-2 py-1 rounded ml-2">Ban</button> `
            : 
           ` <button onclick="banUser(${user.id}, 'active')" class="bg-red-500 text-white px-2 py-1 rounded ml-2">active</button>`
            }
                         </td>
                    </tr>`;
            });
            $("#userTableBody").html(rows);
        },
        error: function() {
            alert("Error fetching users.");
        }
    });
}

 function banUser(userId, status) {
    if (!confirm("Are you sure you want to ban this user?")) return;
    console.log("status: " . status);
    $.ajax({
        url: "/admin/users/ban",
        type: "POST",
        data: { userId: userId, status: status },
        success: function(response) {
     
                fetchUsers();  
           
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
            alert("Error banning user.");
        }
    });
}

 function updateUserRole(userId, role) {
    $.ajax({
        url: "/admin/users/update-role",
        type: "POST",
        data: { userId: userId, role: role },
        success: function(response) {
            if (response && response.success) {
                alert(response.message);
                fetchUsers();  
            } else {
                alert("Failed to update user role.");
            }
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
            alert("Error updating user role.");
        }
    });
}
</script>

 