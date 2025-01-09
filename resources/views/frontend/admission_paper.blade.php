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
    <div class="py-12 flex items-center justify-center min-h-screen" style="font-family: 'Lora', serif;">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Student Registration Form</h1>
            <form action="{{ route('student.store') }}" method="POST">
              @csrf
              <!-- Personal Information -->
              <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Student Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" value="{{ old('name') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required >
              </div>
              <div class="mb-4">
                <label for="father_name" class="block text-sm font-medium text-gray-700">Father's Name</label>
                <input type="text" id="father_name" name="father_name" value="{{ old('father_name') }}" placeholder="Enter your father's name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required >
              </div>
              <div class="mb-4">
                <label for="mother_name" class="block text-sm font-medium text-gray-700">Mother's Name</label>
                <input type="text" id="mother_name" name="mother_name" value="{{ old('mother_name') }}"  placeholder="Enter your mother's name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
              </div>
              <div class="mb-4">
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" id="dob" name="dob" value="{{ old('dob') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
              </div>
              <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <select id="gender" name="gender" value="{{ old('gender') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
              </div>
        
              <!-- Educational Information -->
              <div class="mb-4">
                <label for="class" class="block text-sm font-medium text-gray-700">Current Class</label>
                <select id="class" name="class" value="{{ old('class') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                  <option value="six">Class 6</option>
                  <option value="seven">Class 7</option>
                  <option value="eight">Class 8</option>
                  <option value="nine">Class 9</option>
                  <option value="ten">Class 10</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="school" class="block text-sm font-medium text-gray-700">School Name</label>
                <input type="text" id="school" name="school" value="{{ old('school') }}" placeholder="Enter your school name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required >
              </div>
              <div class="mb-4">
                <label for="subjects" class="block text-sm font-medium text-gray-700">Subjects to Study</label>
                <input type="text" id="subjects" value="{{ old('subjects') }}" name="subjects" placeholder="e.g., Math, English, Chemistry" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
              </div>
        
              <!-- Submit Button -->
              <div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                  Submit Registration
                </button>
              </div>
            </form>
          </div>
    </div>
</x-app-layout>
