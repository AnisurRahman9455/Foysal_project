<x-app-layout>
    <section>
        <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-8">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">ছুটির আবেদন ফরম</h2>
            <form action="#" method="POST">
              <!-- Name Field -->
              <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-gray-700">শিক্ষার্থীর নাম</label>
                <input type="text" id="name" name="name" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200" placeholder="আপনার নাম লিখুন">
              </div>
        
              <!-- Class Selection -->
              <div class="mb-4">
                <label for="class" class="block text-lg font-medium text-gray-700">শ্রেণি</label>
                <select id="class" name="class" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
                  <option value="">শ্রেণি নির্বাচন করুন</option>
                  <option value="6">ষষ্ঠ</option>
                  <option value="7">সপ্তম</option>
                  <option value="8">অষ্টম</option>
                  <option value="9">নবম</option>
                  <option value="10">দশম</option>
                </select>
              </div>
        
              <!-- Leave Start Date -->
              <div class="mb-4">
                <label for="start_date" class="block text-lg font-medium text-gray-700">ছুটির শুরুর তারিখ</label>
                <input type="date" id="start_date" name="start_date" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
              </div>
        
              <!-- Leave End Date -->
              <div class="mb-4">
                <label for="end_date" class="block text-lg font-medium text-gray-700">ছুটির শেষ তারিখ</label>
                <input type="date" id="end_date" name="end_date" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
              </div>
        
              <!-- Reason -->
              <div class="mb-4">
                <label for="reason" class="block text-lg font-medium text-gray-700">ছুটির কারণ</label>
                <textarea id="reason" name="reason" rows="4" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200" placeholder="ছুটির কারণ লিখুন"></textarea>
              </div>
        
              <!-- Submit Button -->
              <div class="text-center">
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                  আবেদন করুন
                </button>
              </div>
            </form>
          </div>
    </section>
</x-app-layout>