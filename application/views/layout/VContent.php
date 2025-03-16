<div class="md:min-h-screen">
    <div class="mt-4 mb-4 flex justify-center items-center md:items-start md:justify-start md:ml-4 md:mr-4 flex-col md:flex-row">
        <!-- Phần nhập form -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md w-full max-w-md">
            <div class="flex justify-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">
                    <span class="text-yellow-400">Insert Data</span> - CodeIgnter
                </h3>
            </div>
            <form method="post" id="" enctype="multipart/form-data" action="insert_data">
                <!-- Name Input -->
                <div class="mb-4">
                    <label for="ipname" class="block text-xl font-semibold text-gray-700 mb-2">Name:</label>
                    <input 
                        type="text" name="ipname" 
                        value="{$set_value_ipname}" id="ipname" 
                        class="px-4 py-2 border border-blue-300 w-full rounded-lg focus:ring-blue-500 focus:border-blue-600"
                        placeholder="Enter your name">
                    <span class="text-red-500"> {$form_error_ipname} </span>
                </div>

                <!-- Favorite Checkbox -->
                <div class="mb-4">
                    <label for="ipfav1" class="block text-xl font-semibold text-gray-700 mb-2">Favorite:</label>
                    <div class="flex items-center mb-2">
                        <input 
                            type="checkbox" name="ipfav1" id="ipfav1" 
                            value="đá bóng" 
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="ipfav1" class="ml-2 text-gray-700">Đá bóng</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input 
                            type="checkbox" name="ipfav2" id="ipfav2" 
                            value="đọc sách" 
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="ipfav2" class="ml-2 text-gray-700">Đọc sách</label>
                    </div>
                    <div class="flex items-center">
                        <input 
                            type="checkbox" name="ipfav3" id="ipfav3" 
                            value="học tập" 
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="ipfav3" class="ml-2 text-gray-700">Học tập</label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button 
                        type="submit" name="btnInsert" id="btnInsert"
                        class="px-6 py-2 text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                        Submit
                    </button>
                </div>
            </form>
        </div>

        <!-- Phần hiển thị data -->
        <div class="mx-auto w-full mt-5 md:mt-0 px-4">
            <div class="shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <!-- Table Header -->
                    <thead class="bg-gradient-to-r from-blue-500 to-blue-700 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase tracking-wider">ID</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase tracking-wider">Name</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase tracking-wider">Sở Thích</th>
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody class="text-gray-700">
                        {if $data_user|@count > 0}
                            {foreach $data_user as $row}
                                {if $row.ID % 2 != 0}
                                    <!-- Row 1 -->
                                    <tr class="bg-gray-200 hover:bg-yellow-100 hover:text-blue-600 transition-colors">
                                        <td class="px-6 py-4 text-sm"> {$row.ID} </td>
                                        <td class="px-6 py-4 text-sm"> {$row.Name} </td>
                                        <td class="px-6 py-4 text-sm"> {$row.Favorite} </td>
                                    </tr>                 
                                {else}
                                    <!-- Row 2 -->
                                    <tr class="bg-white hover:bg-yellow-100 hover:text-blue-600 transition-colors">
                                        <td class="px-6 py-4 text-sm"> <?php echo $row->ID ?> </td>
                                        <td class="px-6 py-4 text-sm"> <?php echo $row->Name ?> </td>
                                        <td class="px-6 py-4 text-sm"> <?php echo $row->Favorite ?> </td>
                                    </tr>
                                    <?php
                                    }
                                }
                            } else {

                            }
                        ?>
                        <!-- Row 3 -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

