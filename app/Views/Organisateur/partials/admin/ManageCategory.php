<div class="max-w-6xl mx-auto px-4 w-full">
    <h1 class="text-3xl font-bold text-white mb-8">Manage Categories</h1>

     <div id="message" class="hidden mb-4 p-4 rounded"></div>

     <div class="bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-700 mb-8">
        <h2 class="text-xl font-semibold mb-4 text-white"><i class="fas fa-plus-circle mr-2"></i>Add New Category</h2>
        <form id="addCategoryForm">
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2 text-gray-300" for="category_name">Category Name</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500"
                       id="category_name" type="text" name="category_name" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                <i class="fas fa-save mr-2"></i>Add Category
            </button>
        </form>
    </div>

     <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden border border-gray-700">
        <h2 class="text-xl font-semibold p-6 border-b border-gray-700 text-white"><i class="fas fa-list-alt mr-2"></i>Existing Categories</h2>
        <div class="p-6">
            <ul id="categoriesList" class="space-y-2">
             </ul>
        </div>
    </div>
</div>
<script>
     function showMessage(message, color) {
        const messageDiv = $('#message');
        messageDiv.removeClass('hidden bg-red-100 border-red-400 text-red-700 bg-green-100 border-green-400 text-green-700');
        if (color === 'green') {
            messageDiv.addClass('bg-green-800 border-green-600 text-green-200');
        } else {
            messageDiv.addClass('bg-red-800 border-red-600 text-red-200');
        }
        messageDiv.text(message).fadeIn().delay(3000).fadeOut();
    }

    function deleteCategory(categoryId) {
        if (!confirm('Are you sure you want to delete this category?')) return;
        console.log(categoryId);

        $.ajax({
            url: '/deleteCategory',
            type: 'POST',
            data: { category_id: categoryId },
            success: function(response) {
                const result = JSON.parse(response);
                console.log("result category", result);
                if (result) {
                    showMessage('Category deleted sucesssssss', 'green');
                    fetchCategories(); 
                } else {
                    showMessage('Failed to delete category', 'red');
                }
            },
            error: function() {
                showMessage('Error deleting category', 'red');
            }
        });
    }

    $(document).ready(function() {
         fetchCategories();

         $('#addCategoryForm').on('submit', function(e) {
            e.preventDefault();
            const categoryName = $('#category_name').val();

            $.ajax({
                url: '/addCategory',
                type: 'POST',
                data: { category_name: categoryName },
                success: function(response) {
                    const result = JSON.parse(response);
                    console.log("result", result);
                    if (result) {
                        showMessage('Category added sucesssssssssssssss', 'green');
                        fetchCategories();
                        $('#category_name').val(''); 
                    } else {
                        showMessage('Failed to add category', 'red');
                    }
                },
                error: function() {
                    showMessage('Error adding category', 'red');
                }
            });
        });

         function fetchCategories() {
            $.ajax({
                url: '/getAllCategories',
                type: 'GET',
                success: function(response) {
                    const categories = JSON.parse(response);
                    let html = '';
                    categories.forEach(category => {
                        html += `
                            <li class="flex justify-between items-center p-4 bg-gray-700 rounded-lg hover:bg-gray-600 transition duration-200">
                                <span class="text-gray-200 font-medium">${category.name}</span>
                                <button class="delete-category bg-red-600 text-white px-3 py-1 rounded-lg hover:bg-red-700 transition duration-300" onclick="deleteCategory(${category.id})">
                                    <i class="fas fa-trash mr-2"></i>Delete
                                </button>
                            </li>`;
                    });
                    $('#categoriesList').html(html);
                },
                error: function() {
                    showMessage('Error loading categories', 'red');
                }
            });
        }
    });
</script>