<?php


namespace CompanyName\TeamFinder\Router;


class PathParser
{
    private $mainRoute;
    private $mainArgValue;
    private $query;
    private $args;

    public function __construct(string $path)
    {
        $this->query = parse_url($path, PHP_URL_QUERY);
        list($this->mainRoute, $this->mainArgValue) = $this->getMainRouteAndMainArgs($path);
        parse_str($this->query, $this->args);
    }

    private function getMainRouteAndMainArgs(string $path)
    {
        $fullPath = parse_url($path, PHP_URL_PATH);
        $explodedPath = explode('/', $fullPath);
        array_shift($explodedPath);
        $mainRoute = '/'.array_shift($explodedPath);

        return [$mainRoute, $explodedPath];
    }

    /**
     * @return array
     */
    public function getArgs(): array
    {
        return $this->args;
    }

    /**
     * @return mixed|string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @return mixed|string
     */
    public function getMainRoute()
    {
        return $this->mainRoute;
    }

    /**
     * @return mixed
     */
    public function getMainArgValue()
    {
        return $this->mainArgValue;
    }
}