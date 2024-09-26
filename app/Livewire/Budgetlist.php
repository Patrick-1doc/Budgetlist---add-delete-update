<?php

namespace App\Livewire;
use Livewire\Component;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Budgetlist extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshbudgetlist' => '$refresh'];

    public $search = ''; // Search variable

    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination when searching
    }

    public function saveAccount(Request $request){
        // @dd($request -> all());

        // upload value sa database
        $store = Account::create($request -> objectAccount);
        return response()->json([
            'success'=> $store?true:false,
            'msg' =>$store?"naipasok na!":"bobo wala pa"
        ]);
    }


    // Update an existing account
    public function updateAccount(Request $request,$accountid)
    {
        // Find the account by its ID
        $etona = DB::table("accounts2")->where("accountid","like","%".$accountid."%")->get();
        // @dd($etona[0]->id);
        $account = Account::find($etona[0]->id);

        if ($account) {
            $updated = $account->update($request->objectAccount);
            return response()->json( [
                'success' => $updated ? true : false,
                'msg' => $updated ? "Successfully updated!" : "Error while updating"
            ]);
        } else {
            return response()->json( [
                'success' => false,
                'msg' => "Account not found"
            ]);
        }
    }

    public function deleteAccount($accountid)
    {
        // Find the account by its ID
        $etona = DB::table("accounts2")->where("accountid", $accountid)->first();
        //   @dd($etona->id);
        $account = Account::find($etona->id);

        if ($account) {
            $deleted = $account->delete();
            return response()->json( [
                'success' => $deleted ? true : false,
                'msg' => $deleted ? "Successfully deleted!" : "Error while deleting"
            ]);
        } else {
            return response()->json( [
                'success' => false,
                'msg' => "Account not found"
            ]);
        }
    }




    public function render()
    {
        $datas = DB::table('accounts2')
            ->where('accountid', 'like', '%' . $this->search . '%')
            ->orWhere('accountname', 'like', '%' . $this->search . '%')
            ->orWhere('bankname', 'like', '%' . $this->search . '%')
            ->orWhere('currentbalance', 'like', '%' . $this->search . '%')
            ->orWhere('dateopened', 'like', '%' . $this->search . '%')
            ->paginate(5); // Paginate the data

        return view('livewire.budgetlist', ['datas' => $datas]);
    }
}
