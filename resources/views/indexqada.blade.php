<x-app-layout>

<div class="flex justify-center pt-12">

    <div class="w-full max-w-7xl space-y-8">

        <!-- HEADER -->
        <div class="bg-white/60 backdrop-blur-md border border-pink-100 rounded-3xl p-6 shadow-sm">

            <h1 class="text-2xl font-bold gradient-text">
                Missed Prayers (Qada')
            </h1>

            <p class="text-sm text-gray-500 mt-2">
                Track your missed prayers
            </p>

        </div>

        <!-- SUMMARY BOXES -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <!-- PENDING -->
            <div class="bg-white/80 shadow rounded-xl p-4 h-28 flex flex-col items-center justify-center text-center">
                <div class="text-sm text-black">Pending</div>
                <div class="text-3xl font-bold text-red-500 mt-1">
                    {{ $pendingQadaCount ?? 0 }}
                </div>
            </div>

            <!-- COMPLETED -->
            <div class="bg-white/80 shadow rounded-xl p-4 h-28 flex flex-col items-center justify-center text-center">
                <div class="text-sm text-black">Completed</div>
                <div class="text-3xl font-bold text-green-500 mt-1">
                    {{ $completedQadaCount ?? 0 }}
                </div>
            </div>

            <!-- TOTAL -->
            <div class="bg-white/80 shadow rounded-xl p-4 h-28 flex flex-col items-center justify-center text-center">
                <div class="text-sm text-black">Total Qada</div>
                <div class="text-3xl font-bold text-gray-500 mt-1">
                    {{ $totalQadaCount ?? 0 }}
                </div>
            </div>

        </div>

        <!-- TABLE -->
        <div class="bg-white/60 backdrop-blur-md border border-pink-100 rounded-3xl p-6 shadow-sm">

            <h3 class="text-lg font-semibold mb-4">Qada Tracker</h3>

            <table class="w-full text-sm">

                <thead>
                <tr class="text-left border-b">
                    <th class="py-2">Date</th>
                    <th class="py-2">Prayer</th>
                    <th class="py-2">Status</th>
                    <th class="py-2">Done</th>
                </tr>
                </thead>

                <tbody>
                @forelse($qadas as $qada)
                <tr class="border-b">

                    <td class="py-2">
                        {{ \Carbon\Carbon::parse($qada->qada_date)->format('d M Y') }}
                    </td>

                    <!-- PRAYER NAME -->
                    <td class="py-2 font-medium text-gray-700">
                        {{ $qada->prayer_type }}
                    </td>

                    <!-- STATUS -->
                    <td class="py-2">
                        @if($qada->status === 'completed')
                            <span class="text-green-600">Completed</span>
                        @else
                            <span class="text-red-500">Pending</span>
                        @endif
                    </td>

                    <!-- TOGGLE -->
                    <td class="py-2">

                        <form method="POST" action="{{ route('qada.toggle', $qada->id) }}">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="text-lg">
                                @if($qada->status === 'completed')
                                    ☑
                                @else
                                    ☐
                                @endif
                            </button>
                        </form>

                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="4" class="py-6 text-center text-gray-400">
                        No Qada records yet
                    </td>
                </tr>
                @endforelse
                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>