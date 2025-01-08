<x-app-layout>
    <x-slot name="header">
        <img 
            src="{{ asset('frontend/images/profile/cover.webp') }}" 
            alt="A beautiful example image" 
            class="rounded-lg shadow-md w-full max-w-md mx-auto"
            />
    </x-slot>
    <x-slot name="welcome">
        Welcome <span class="text-3xl"> &#128075; </span> <span class="text-red-700"> <p class="text-3xl"> &hearts; &hearts; {{ Auth::user()->name }} &hearts; &hearts; </p> </span> 
    </x-slot>
   <!-- রুটিন টেবিল -->
<div class="container mx-auto my-8 p-4 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">সাপ্তাহিক ক্লাস রুটিন</h2>
    <!-- রেস্পন্সিভ টেবিল -->
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200">
        <thead>
          <tr class="bg-blue-500 text-white">
            <th class="py-3 px-6 text-left text-lg md:text-xl lg:text-2xl">দিন</th>
            <th class="py-3 px-6 text-left text-lg md:text-xl lg:text-2xl">সময়</th>
            <th class="py-3 px-6 text-left text-lg md:text-xl lg:text-2xl">বিষয়</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <!-- সোমবার -->
          <tr class="border-b">
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl"> শনিবার </td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">১০:০০ AM - ১১:৩০ AM</td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">গণিত</td>
          </tr>
          <tr class="bg-gray-50 border-b">
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl"> রবিবার </td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">১২:০০ PM - ১:৩০ PM</td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">ইংরেজি</td>
          </tr>
          <!-- মঙ্গলবার -->
          <tr class="border-b">
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl"> সোমবার </td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">১০:০০ AM - ১১:৩০ AM</td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">পদার্থবিজ্ঞান</td>
          </tr>
          <tr class="bg-gray-50 border-b">
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">মঙ্গলবার</td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">১২:০০ PM - ১:৩০ PM</td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">রসায়ন</td>
          </tr>
          <!-- বুধবার -->
          <tr class="border-b">
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">বুধবার</td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">১০:০০ AM - ১১:৩০ AM</td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">জীববিজ্ঞান</td>
          </tr>
          <tr class="bg-gray-50 border-b">
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl"> বৃহস্পতিবার </td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">১২:০০ PM - ১:৩০ PM</td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">তথ্য ও যোগাযোগ প্রযুক্তি</td>
          </tr>
          <tr class="bg-gray-50 border-b">
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl"> শুক্রবার </td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">১২:০০ PM - ১:৩০ PM</td>
            <td class="py-3 px-6 text-lg md:text-xl lg:text-2xl">তথ্য ও যোগাযোগ প্রযুক্তি</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
  
</x-app-layout>
