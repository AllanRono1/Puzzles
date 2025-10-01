<x-layout>
    <div class="space-y-10">
    
    <section class="text-center pt-6">
        <h3 class="text-bold text-4xl mb-5">Find Your Job</h3>
        <form action="" class="mt-6">
            <input type="text" placeholder="Managerial position" class="rounded-xl bg-white/5 border-white/5 px-5 py-4 text-bold text-xl w-full max-w-xl">
        </form>
    </section>
    <section>
        <x-section-heading>Available Jobs For You</x-section-heading>
        <div class="grid lg:grid-cols-3 gap-8 mt-5">
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
            <x-job-card></x-job-card>
        </div>
    </section>

    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="mt-6 space-x-4">
            <x-job-tags>MySQL</x-job-tags>
            <x-job-tags>Linux</x-job-tags>
            <x-job-tags>PHP</x-job-tags>
            <x-job-tags>Laravel</x-job-tags>
            <x-job-tags>Javascript</x-job-tags>
            <x-job-tags>React</x-job-tags>
            <x-job-tags>Redis</x-job-tags>
            <x-job-tags>MongoDB</x-job-tags>
        </div>
    </section>

    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="mt-6 space-y-2">
        <x-job-card-wide></x-job-card-wide>
        <x-job-card-wide></x-job-card-wide>
        <x-job-card-wide></x-job-card-wide>
    </div>
    </section>
</div>
</x-layout>