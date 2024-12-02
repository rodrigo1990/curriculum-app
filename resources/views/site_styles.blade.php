<!DOCTYPE html>
<html>
<head>
    <title>Site Styles</title>
</head>
<body>
<h2>Site Styles</h2>
@forelse ($styles as $style)
    <p>
        Site Styles: {{ $style->backgroundColor }}<br>
    </p>
@empty
    <p>No results</p>
@endforelse
</body>
</html>