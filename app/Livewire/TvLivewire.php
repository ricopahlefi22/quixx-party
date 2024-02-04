<?php

namespace app\Livewire;

use Livewire\Component;
use App\Models\Party;
use App\Models\VotingResult;
use Carbon\Carbon;

class TvLivewire extends Component{

public $data = [];

 public function render()
    {
        // Fetch the list of parties
        $parties = $this->data['list_party'] = Party::all();

        // Calculate total votes for each party
        foreach ($parties as $party) {
            $totalVotes = VotingResult::where('voting_party_id', $party->party_id)->sum('number');
            $party->totalVotes = $totalVotes;
        }

        // Emit the 'chartUpdated' event
        $this->emit('chartUpdated', [
            'labels' => $parties->pluck('name')->toArray(),
            'data' => $parties->pluck('totalVotes')->toArray(),
        ]);

        // Render the Livewire view
        return view('livewire.tv-livewire', $this->data);
    }

    // Other methods (hydrate, mount, updatedData, poll) go here...

    // Example Livewire action method
    public function updateChart()
    {
        // Your logic to update the chart data

        // Emit the 'chartUpdated' event
        $this->emit('chartUpdated', [
            'labels' => $updatedLabels,
            'data' => $updatedData,
        ]);
    }


    public function hydrate()
    {
        // Fetch the latest party data on Livewire component hydration
        $this->data['list_party'] = Party::all();
    }

    public function mount()
    {
        // Fetch the initial party data when the component is first loaded
        $this->data['list_party'] = Party::all();
    }

    public function updatedData()
    {
        // This method is called whenever the 'data' property is updated
        // You can add any additional logic here if needed
    }

    public function poll()
    {
        // This method is called periodically to refresh the component
        return 5; // Poll every 5 seconds
    }

}
