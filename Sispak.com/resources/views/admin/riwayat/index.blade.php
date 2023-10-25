<x-app-layout>
    <x-slot name="title">Riwayat diagnosa</x-slot>

    @if (session()->has('success'))
        <x-alert type="success" message="{{ session()->get('success') }}" />
    @endif
    <x-card>
        <div class="table-responsive">
            <table class="table table-hover border">
                <thead>
                    <th>ID</th>
                    <th>Penyakit terdiagnosa</th>
                    <th>Tanggal</th>
                    <th></th>
                </thead>
                <tbody>
                    @forelse($riwayat as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ unserialize($row->cf_max)[1] }} <b>(<span
                                        class="text-danger">{{ number_format(unserialize($row->cf_max)[0] * 100, 2) }}%</span>)</b>
                            </td>
                            <td>{{ $row->created_at->format('d M Y, H:m:s') }}</td>
                            <td>
                                <a href="{{ route('admin.riwayat', $row->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye mr-1"></i>Lihat</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-3">
                {{ $riwayat->links() }}
            </div>
        </div>
    </x-card>
</x-app-layout>
