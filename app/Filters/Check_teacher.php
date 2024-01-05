<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Check_teacher implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('type') != '5' && session()->get('type') != '2')
        {
            return redirect()
                ->to('/');
        }

    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}