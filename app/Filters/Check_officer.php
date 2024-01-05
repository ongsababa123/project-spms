<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Check_officer implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('type') != '5' && session()->get('type') != '3')
        {
            return redirect()
                ->to('/');
        }

    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}