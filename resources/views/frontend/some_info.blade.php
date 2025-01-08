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
    <div class="py-12">
        <div class="container mx-auto p-6">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-blue-500 text-white text-center py-6">
                    <h1 class="text-4xl font-bold">About Us</h1>
                    <p class="mt-2 text-lg">Learn more about Backup Coaching Center</p>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">About Backup Coaching Center</h2>
                    <p class="text-gray-700 text-lg md:text-1xl lg:text-2xl leading-relaxed mb-4">
                        Backup Coaching Center একটি অনন্য শিক্ষা প্রতিষ্ঠান যেখানে শিক্ষার্থীদের শিক্ষাজীবনকে সহজ এবং সাফল্যমণ্ডিত করার জন্য বিশেষভাবে কাজ করা হয়। আমাদের লক্ষ্য হল শিক্ষার্থীদের একাডেমিক চাহিদা পূরণ করা, তাদের দক্ষতা বৃদ্ধি করা, এবং তাদেরকে একটি উজ্জ্বল ভবিষ্যতের জন্য প্রস্তুত করা।
                    </p>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">আমাদের বৈশিষ্ট্য</h3>
                    <ul class="list-disc pl-5 text-gray-700 mb-4 text-lg md:text-1xl lg:text-2xl">
                        <li>অভিজ্ঞ ও প্রশিক্ষিত শিক্ষক দল</li>
                        <li>আধুনিক ক্লাসরুম সুবিধা</li>
                        <li>ছাত্রদের জন্য ব্যক্তিগত পরামর্শ সেবা</li>
                        <li>নিয়মিত মডেল টেস্ট এবং ফলাফল বিশ্লেষণ</li>
                        <li>অভিভাবকদের সঙ্গে নিয়মিত যোগাযোগ</li>
                    </ul>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">আমাদের লক্ষ্য</h3>
                    <p class="text-gray-700 leading-relaxed text-lg md:text-1xl lg:text-2xl">
                        শিক্ষার্থীদের একাডেমিক সফলতা অর্জনে সাহায্য করার পাশাপাশি তাদের মধ্যে আত্মবিশ্বাস তৈরি করা এবং বাস্তব জীবনের জন্য প্রস্তুত করা।
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>