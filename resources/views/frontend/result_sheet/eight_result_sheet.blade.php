<x-app-layout>
  <slot title="header">
    <h1 class="text-center text-red-700 text-2xl font-bold bg-green-400 rounded-md "> অষ্টম শ্রেণী রেজাল্ট সিট </h1>
  </slot>
  
  <!-- Main Section -->
  <section class="my-4">
        <!-- Responsive Iframe Container -->
        <div class="flex justify-center items-center bg-gray-100">
          <div class="w-full max-w-4xl aspect-w-16 aspect-h-9">
            <iframe 
              src="https://drive.google.com/file/d/1S25CQdoDWh6XvDtk7puUJs9sUnRa3d1r/preview" 
              class="w-full h-full rounded-md border border-gray-300"
              allow="autoplay">
            </iframe>
          </div>
        </div>        
  </section>
</x-app-layout>
