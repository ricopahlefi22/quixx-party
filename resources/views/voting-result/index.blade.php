@extends('template.base')

@section('content')
    <div x-data="basic">
        <form action="{{ url('input-c1/store') }}" method="POST" class="space-y-5">
            @csrf

            <input type="hidden" name="voting_place_id" value="{{ $votingPlace->id }}">

            <div class="panel mb-4">
                <h5 class="text-lg font-semibold dark:text-white-light">Tabel TPS</h5>
            </div>

            <div class="grid grid-cols-2 gap-3">
                @foreach ($parties as $party)
                    <div class="panel">
                        <div class="flex justify-between mb-5">
                            <h6 class="text-center text-[#0e1726] font-semibold text-base dark:text-white-light">
                                <img class="w-12 h-12 overflow-hidden object-cover" src="{{ asset($party->logo) }}" />
                                <span class="">{{ $party->short_name }}</span>
                            </h6>
                            <div>
                                <label for="partyVoter">
                                    Suara Partai
                                </label>
                                <input id="partyVoter" type="text" placeholder="Masukkan Suara Partai"
                                    class="form-input" />
                            </div>
                        </div>
                        @foreach ($party->candidates->where('voting_zone_id', $votingPlace->voting_zone_id) as $candidate)
                            <div class="mb-3">
                                <label for="partyVoter">
                                    <strong>{{ $candidate->number }}.</strong> {{ $candidate->name }}
                                </label>
                                <input id="partyVoter" type="number" min="0"
                                    name="number_voters_candidate_{{ $candidate->id }}"
                                    placeholder="Masukkan Suara {{ $candidate->name }}"
                                    value="{{ empty($candidate->votingResult->where('voting_place_id', $votingPlace->id)->first()->number) ? null : $candidate->votingResult->where('voting_place_id', $votingPlace->id)->first()->number }}"
                                    class="form-input" />
                            </div>
                            {{-- <div class="grid grid-cols-2 my-2">
                                <div class="">
                                    <h6
                                        class="{{ App\Models\WebConfig::first()->candidate_id == $candidate->id ? 'fw-bold' : null }}">
                                        <strong>{{ $candidate->number }}.</strong> {{ $candidate->name }}
                                    </h6>
                                </div>
                                <div class="">
                                    <input type="number" min="0"
                                        name="number_voters_candidate_{{ $candidate->id }}" class="form-control"
                                        placeholder="Masukkan Jumlah Suara"
                                        value="{{ empty($candidate->votingResult->where('voting_place_id', $votingPlace->id)->first()->number) ? null : $candidate->votingResult->where('voting_place_id', $votingPlace->id)->first()->number }}">
                                </div>
                            </div> --}}
                        @endforeach
                    </div>
                @endforeach
            </div>
            <button id="submit" type="submit" class="my-4 float-end btn btn-primary">
                Simpan
            </button>
        </form>
    </div>
@endsection
