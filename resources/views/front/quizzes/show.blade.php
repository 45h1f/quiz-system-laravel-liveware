@if (! $quiz->public && ! auth()->check())
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-indigo-500">
        <span class="inline-block align-middle mr-8">
            This test is available only for registered users. Please <a href="{{ route('login') }}" class="hover:underline">Log in</a> or <a href="{{ route('register') }}" class="hover:underline">Register</a>
        </span>
    </div>
@else
    @livewire('front.quizzes.show', ['quiz' => $quiz])
@endif
