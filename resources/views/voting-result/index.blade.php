@extends('template.base')

@section('content')
    <div x-data="basic">
        <form action="{{ url('input-c1/store') }}" method="POST" class="space-y-5">
            @csrf

            <input type="hidden" name="voting_place_id" value="{{ $votingPlace->id }}">

            <div class="panel mb-4">
                <h5 class="text-lg font-semibold dark:text-white-light">
                    Tabel {{ $votingPlace->name }} {{ $votingPlace->village->name }}
                </h5>
            </div>

            <h5 class="text-lg font-semibold dark:text-white-light">
                Caleg Provinsi
            </h5>

            <div class="panel mb-4">
                <div class="flex justify-between mb-5">
                    <h6 class="text-center text-[#0e1726] font-semibold text-base dark:text-white-light">
                        <img class="w-12 h-12 overflow-hidden object-cover" src="{{ asset($web->party->logo) }}" />
                        <span class="">{{ $web->party->short_name }}</span>
                    </h6>
                    <div>
                        <label for="partyVoter{{ $web->party_id }}">
                            Suara Partai
                        </label>
                        <input id="partyVoter{{ $web->party_id }}" type="number" min="0"
                            name="number_voters_party_province_{{ $web->party->id }}"
                            value="{{ empty($web->party->votingResults->where('level', 'Provinsi')->where('voting_place_id', $votingPlace->id)->whereNull('candidate_id')->first()->number)? null: $web->party->votingResults->where('level', 'Provinsi')->where('voting_place_id', $votingPlace->id)->whereNull('candidate_id')->first()->number }}"
                            placeholder="Masukkan Suara Partai" class="form-input" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    @foreach ($web->party->candidates->where('level', 'Provinsi') as $candidate)
                        <div class="mb-3">
                            <label for="candidateVoter{{ $candidate->id }}">
                                <strong>{{ $candidate->number }}.</strong> {{ $candidate->name }}
                            </label>
                            <input id="candidateVoter{{ $candidate->id }}" type="number" min="0"
                                name="number_voters_candidate_{{ $candidate->id }}"
                                placeholder="Masukkan Suara {{ $candidate->name }}"
                                value="{{ empty($candidate->votingResults->where('level', 'Provinsi')->where('voting_place_id', $votingPlace->id)->first()->number)? null: $candidate->votingResults->where('level', 'Provinsi')->where('voting_place_id', $votingPlace->id)->first()->number }}"
                                class="form-input" />
                        </div>
                    @endforeach
                </div>
            </div>

            <h5 class="text-lg font-semibold dark:text-white-light">
                Caleg Kabupaten
            </h5>

            <div class="grid grid-cols-2 gap-3">
                @foreach ($parties as $party)
                    <div class="panel">
                        <div class="flex justify-between mb-5">
                            <h6 class="text-center text-[#0e1726] font-semibold text-base dark:text-white-light">
                                <img class="w-12 h-12 overflow-hidden object-cover" src="{{ asset($party->logo) }}" />
                                <span class="">{{ $party->short_name }}</span>
                            </h6>
                            <div>
                                <label for="partyVoter{{ $party->id }}">
                                    Suara Partai
                                </label>
                                <input id="partyVoter{{ $party->id }}" type="number" min="0"
                                    name="number_voters_party_city_{{ $party->id }}"
                                    value="{{ empty($party->votingResults->where('level', 'Kabupaten')->where('voting_place_id', $votingPlace->id)->whereNull('candidate_id')->first()->number)? null: $party->votingResults->where('level', 'Kabupaten')->where('voting_place_id', $votingPlace->id)->whereNull('candidate_id')->first()->number }}"
                                    placeholder="Masukkan Suara Partai" class="form-input" />
                            </div>
                        </div>
                        @foreach ($party->candidates->where('voting_zone_id', $votingPlace->voting_zone_id) as $candidate)
                            <div class="mb-3">
                                <label for="candidateVoter{{ $candidate->id }}">
                                    <strong>{{ $candidate->number }}.</strong> {{ $candidate->name }}
                                </label>
                                <input id="candidateVoter{{ $candidate->id }}" type="number" min="0"
                                    name="number_voters_candidate_{{ $candidate->id }}"
                                    placeholder="Masukkan Suara {{ $candidate->name }}"
                                    value="{{ empty($candidate->votingResults->where('level', 'Kabupaten')->where('voting_place_id', $votingPlace->id)->first()->number) ? null : $candidate->votingResults->where('level', 'Kabupaten')->where('voting_place_id', $votingPlace->id)->first()->number }}"
                                    class="form-input" />
                            </div>
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
