@props(['faqs' => []])

<div class="space-y-4" x-data="{ openIndex: null }">
    @foreach($faqs as $index => $faq)
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
        {{-- Question Button --}}
        <button
            @click="openIndex === {{ $index }} ? openIndex = null : openIndex = {{ $index }}"
            class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-gray-50 transition-colors">
            <span class="font-semibold text-gray-900 text-lg pr-4">{{ $faq['question'] }}</span>
            <svg
                class="w-6 h-6 text-primary flex-shrink-0 transition-transform duration-300"
                :class="openIndex === {{ $index }} ? 'rotate-180' : ''"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        {{-- Answer --}}
        <div
            x-show="openIndex === {{ $index }}"
            x-collapse
            class="px-6 pb-5 text-gray-600 leading-relaxed">
            {{ $faq['answer'] }}
        </div>
    </div>
    @endforeach
</div>