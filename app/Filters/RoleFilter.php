<?php

namespace App\Filters;

use Config\Services;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use function PHPUnit\Framework\isEmpty;

class RoleFilter implements FilterInterface
{
	/**
	 * Do whatever processing this filter needs to do.
	 * By default it should not return anything during
	 * normal execution. However, when an abnormal state
	 * is found, it should return an instance of
	 * CodeIgniter\HTTP\Response. If it does, script
	 * execution will end and that Response will be
	 * sent back to the client, allowing for error pages,
	 * redirects, etc.
	 *
	 * @param \CodeIgniter\HTTP\RequestInterface $request
	 * @param array|null                         $params
	 *
	 * @return mixed
	 */

	public function before(RequestInterface $request, $params = null)
	{
		if (empty($params)) {
			return redirect()->to(base_url());
		}
		$user = auth()->user();

		// Make sure this user have rigths/the role to open the page
		foreach ($params as $role) {
			if ($user->inGroup($role)) {
				// dd($user->inGroup($role));
				return;
			}
		}

		// if role doesn't match
		return redirect()->to(base_url());
	}

	//--------------------------------------------------------------------

	/**
	 * Allows After filters to inspect and modify the response
	 * object as needed. This method does not allow any way
	 * to stop execution of other after filters, short of
	 * throwing an Exception or Error.
	 *
	 * @param \CodeIgniter\HTTP\RequestInterface  $request
	 * @param \CodeIgniter\HTTP\ResponseInterface $response
	 *
	 * @return mixed
	 */
	public function after(RequestInterface $request, ResponseInterface $response, $arguments = NULL)
	{
	}

	//--------------------------------------------------------------------
}
