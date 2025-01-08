<x-app-layout>
    <section>
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-900 text-center mb-4">শিক্ষার্থীদের পেমেন্ট ফর্ম</h3>
            <h1 class="text-xl text-black text-center"> এই নাম্বারে টাকা পাঠান </h1>
            <div class="flex space-x-4 justify-center">
                <!-- Image 1 -->
                <img src="{{ asset('frontend/images/paymenticon/bkash.png') }}" alt="Bkash" class="w-8 h-8 rounded-full">
                <!-- Image 2 -->
                <img src="{{ asset('frontend/images/paymenticon/nagad.png') }}" alt="Nagad" class="w-8 h-8 rounded-full">
                <!-- Image 3 -->
                <img src="{{ asset('frontend/images/paymenticon/upay.png') }}" alt="Upay" class="w-8 h-8 rounded-full">
                <!-- Image 4 -->
                <img src="{{ asset('frontend/images/paymenticon/rocket.png') }}" alt="Rocket" class="w-8 h-8 rounded-full">
            </div>
            <h1 class="text-2xl text-red-500 text-center">
                01741-257011
            </h1>
            <section>
                <form action="#" method="POST" class="space-y-4">
                    <!-- Student Name -->
                    <div>
                      <label for="studentName" class="block text-lg font-medium text-gray-700">শিক্ষার্থীর নাম</label>
                      <input type="text" id="studentName" name="studentName" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="শিক্ষার্থীর নাম লিখুন" required>
                    </div>
              
                    <!-- Class Name -->
                    <div>
                      <label for="className" class="block text-lg font-medium text-gray-700">ক্লাসের নাম</label>
                      <select id="class" name="class" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
                        <option value="">শ্রেণি নির্বাচন করুন</option>
                        <option value="6">ষষ্ঠ শ্রেণি</option>
                        <option value="7">সপ্তম শ্রেণি</option>
                        <option value="8">অষ্টম শ্রেণি</option>
                        <option value="9">নবম শ্রেণি</option>
                        <option value="10">দশম শ্রেণি</option>
                      </select>
                    </div>
              
                    <!-- Payment Number -->
                    <div>
                      <label for="paymentNumber" class="block text-lg font-medium text-gray-700">পেমেন্ট নাম্বার</label>
                      <input type="text" id="paymentNumber" name="paymentNumber" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="পেমেন্ট নাম্বার লিখুন" required>
                    </div>
              
                    <!-- Payment Amount -->
                    <div>
                      <label for="paymentAmount" class="block text-lg font-medium text-gray-700">পেমেন্টের পরিমাণ</label>
                      <input type="number" id="paymentAmount" name="paymentAmount" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="পেমেন্টের পরিমাণ লিখুন" required>
                    </div>
              
                    <!-- Batch Number -->
                    <div>
                      <label for="batchNumber" class="block text-lg font-medium text-gray-700">বেজ নাম্বার</label>
                      <input type="text" id="batchNumber" name="batchNumber" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="বেজ নাম্বার লিখুন 10:30AM or 02:00PM" required>
                    </div>
              
                    <!-- Submit Button -->
                    <div class="text-center">
                      <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        পেমেন্ট সাবমিট করুন
                      </button>
                    </div>
                  </form>
            </section>
          </div>
    </section>
</x-app-layout>