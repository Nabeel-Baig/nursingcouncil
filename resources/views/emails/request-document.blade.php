Hello Admin,
{{ ($request['user']['first_name'] ?? '') . ($request['user']['middle_name'] ?? '') . ($request['user']['last_name'] ?? '') }}
Requested for {{ $request['subject'] }}.
Details : {{ $request['detail'] }}
