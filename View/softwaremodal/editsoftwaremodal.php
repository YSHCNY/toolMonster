<div id="static-modal-edit" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex bg-green-900 items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                
                <h3 class="text-xl font-semibold text-white ">
                    Edit Form
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal-edit">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-5 space-y-4">
              

                <form action="Controller/update.php" method = "POST">
                    <input type="hidden" name="id" id="editId">
                    <div>
                        <label for="productN" class="block mb-2 text-xs font-medium text-gray-400  dark:text-white">Product Name</label>
                        <input type="text" name="productN" id="editSoftwareName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-900 focus:border-blue-900 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Product" required />
                    </div>
                    <!-- {Product Type} -->
                    <div>
                        <label for="productT" class="block mb-2 text-xs font-medium text-gray-400  dark:text-white">Product Type</label>
                        <input type="text" name="productT" id="editSoftwareType" placeholder="Type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-900 focus:border-blue-900 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <!-- {Product Key} -->
                    <div>
                        <label for="productK" class="block mb-2 text-xs font-medium text-gray-400  dark:text-white">Product Key</label>
                        <input type="text" name="productK" id="editProductKey" placeholder="Key" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-900 focus:border-blue-900 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>

                    <!-- {Person in charge} -->
                    <div>
                        <label for="productO" class="block mb-2 text-xs font-medium text-gray-400  dark:text-white">Product Owner</label>
                        <input type="text" name="productO" id="editPersonIC" placeholder="Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-900 focus:border-blue-900 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>

                    
                    <div class=" w-full border pb-5 mt-5 rounded-md">
                        <div date-rangepicker class="my-5 flex items-center  ">
                        <div class="relative  mx-auto mt-5">
                        <label for="start" class="block text-xs font-medium text-gray-400  dark:text-white">Manufactured Date</label>
                            <div class="absolute inset-y-0 start-0 flex items-center pt-4 ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            
                            <input name="start" type="text"  id = "editSoftwareDA" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start" required />
                        </div>
                        <span class="mx-3 text-gray-500 mt-5">to</span>
                        <div class="relative mx-auto mt-5">
                            <div class="absolute inset-y-0 start-0 flex items-center pt-4 ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <label for="end" class="block text-xs font-medium text-gray-400  dark:text-white">Expiry Date</label>
                            <input name="end" id = "editSoftwareED" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end" required />
                        </div>
                        </div>
                        </div>
            </div>
            <!-- Modal footer -->
            <div class="grid grid-cols-2 gap-4 p-4">
                    <a data-modal-hide="static-modal-edit" class="w-full  hover:text-white hover:bg-red-900 bg-transparent transition delay-200 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center" >Cancel</a>


                    <button type="submit" name = 'submitSoftware' value = 'submitSoftware' class="w-full text-white  bg-green-900 hover:bg-green-800 f font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                    </div>
                

            </form>
        </div>
    </div>
</div>
