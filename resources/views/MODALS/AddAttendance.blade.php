<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/addAttendance.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="attendance-card">
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-600 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-600 dark:border-neutral-700">
          <h3 class="text-lg font-bold text-gray-800 dark:text-white">
            Make an Attendance
          </h3>
        </div>
        <div class="p-4 md:p-5 flex flex-col gap-10">

          <div class="max-w-lg">
            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white" id="text-inputs" name="#">Name</label>
            <input type="text" id="input-label" class="  py-3 px-4 block w-full border-white rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500  disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder" placeholder="Name">
          </div>

          <div class="max-w-lg">
            <label for="date-picker" class="block text-sm font-medium mb-2 dark:text-white" id="text-inputs" name="#">Date</label>
            <input type="date" id="date-picker" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Date">
          </div>
          

          <div class="max-w-lg">
            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white" id="text-inputs" name="#">Subject</label>
            <input type="text" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Subject">
          </div>

          <div class="time-in-out flex flex-row gap-10">
            <div class="max-w-sm">
              <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white" id="text-inputs" name="#">Time in</label>
              <input type="text" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Time in">
            </div>
  
            <div class="max-w-sm">
              <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white" id="text-inputs" name="#">Time out</label>
              <input type="text" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Time out">
            </div>
          </div>


          <div class="max-w-lg">
            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white" id="text-inputs" name="#">Status</label>
            <select id="input-label" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <option selected="">Select Status</option>
              <option>Present</option>
              <option>Absent</option>
              <option>Late</option>
            </select>
          </div>

          <div class="buttons flex flex-row gap-4 ml-auto">
            <button type="button" id="cancelButton" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border  border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
              Cancel
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
            </button>

            <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
               Confirm
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
</body>
<!-- Add this script inside your HTML -->
<script>
document.getElementById("cancelButton").addEventListener("click", function() {
    document.getElementById("hs-slide-down-animation-modal").classList.add("hidden");
    document.querySelector(".hs-overlay-background").classList.add("hidden");
});



</script>

</html>