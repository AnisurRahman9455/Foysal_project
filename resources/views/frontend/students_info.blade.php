<x-app-layout>
    <h3 class="text-center text-2xl">মাসিক বেতন</h3>
    <div class="container mx-auto p-4">
        @if($Payments->isNotEmpty())
            <!-- গ্রিড কন্টেইনার -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($Payments as $payment)
                    <!-- প্রতিটি কার্ড -->
                    <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
                        <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <p class="text-lg"> পেমেন্টের পরিমাণঃ- <mark>{{ $payment->paymentAmount }} টাকা</mark> </p>
                            <p class="text-lg"> বেজ নাম্বারঃ- <mark> {{ $payment->batchNumber }} </mark></p>
                            <p class="text-lg"> পেমেন্ট নাম্বারঃ:- <mark> {{ $payment->paymentNumber }} </mark> </p>
                            <p class="text-lg"> শিক্ষার্থীর নামঃ- <mark> {{ $payment->studentName }} </mark> </p>
                            <p class="text-lg"> ক্লাসের নামঃ- <mark> {{ $payment->className }} </mark> </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No Salary Data Found</p>
        @endif
    </div>
<!-- Admission Information -->
<div class="text-center text-2xl text-red-600">
    ভর্তি ইনফরমেশন
</div>
 @if($StudentsInfo->isNotEmpty())
   @foreach ($StudentsInfo as $student)
   <div class="flex justify-center items-center bg-gray-100 my-3">
    <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-6">
      <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">Your Admission Information</h2>
      <div class="mb-4">
        <p class="text-sm font-medium text-gray-600">Student Name: <span class="font-semibold text-black"> {{ $student->name }} </span> </p>
      </div>
      <div class="mb-4">
        <p class="text-sm font-medium text-gray-600">Father's Name:<span class="font-semibold text-black"> {{ $student->father_name }} </span></p>
      </div>
      <div class="mb-4">
        <p class="text-sm font-medium text-gray-600">Mother's Name: <span class="font-semibold text-black"> {{ $student->mother_name }} </span> </p>
      </div>
      <div class="mb-4">
        <p class="text-sm font-medium text-gray-600">Date of Birth: <span class="font-semibold text-black"> {{ $student->dob }} </span></p>
      </div>
      <div class="mb-4">
        <p class="text-sm font-medium text-gray-600">Gender: <span class="font-semibold text-black"> {{ $student->gender }} </span></p>
      </div>
      <div class="mb-4">
        <p class="text-sm font-medium text-gray-600">Phone Number: <span class="font-semibold text-black"> {{ $student->phone }} </span> </p>
      </div>
      <div class="mb-4">
        <p class="text-sm font-medium text-gray-600">Current Class: <span class="font-semibold text-black"> {{ $student->class }} </span> </p>
      </div>
      <div class="mb-4">
        <p class="text-sm font-medium text-gray-600">School Name: <span class="font-semibold text-black"> {{ $student->school }} </span> </p>
      </div>
      <div class="mb-4">
        <p class="text-sm font-medium text-gray-600">Subjects to Study: <span class="font-semibold text-black"> {{ $student->subjects }} </span> </p>
      </div>
    </div>
  </div>
   @endforeach
 @else
    <p class="text-center text-2xl text-red-600">No Admission information found for you</p>
 @endif
  
</x-app-layout>
