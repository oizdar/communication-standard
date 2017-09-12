<?php
namespace oizdar\CommunicationStandard;

use Symfony\Component\HttpFoundation\JsonResponse;

class Response extends JsonResponse
{
	/**
	 * @param mixed $data
	 * @param string $code
	 * @param int $status
	 * @param array $headers
	 */
	public function __construct($data = null, string $code, int $status = self::HTTP_OK, array $headers = [])
	{
		parent::__construct('', $status, $headers);

		$data = [
			'code' => $code,
			'data' => $data
		];

		$this->setData($data);
	}
}
