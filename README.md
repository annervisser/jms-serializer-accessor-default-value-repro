# Reproduction of BC break in jms/serializer

## Running
Run `run.sh`, it will:
1. Install `jms/serializer:3.17.1`
2. Run `test.php`
3. Install `jms/serializer:3.18.0`
4. Run `test.php`
5. Outputs will be in:
   - `output-3.17.1.json`
   - `output-3.18.0.json`

## Results
output in 3.17.1:
```json
{
    "traditional": "default",
    "traditionalWithSetter": "default"
}
```

output in 3.18.0:
```json
{
    "traditional": "default",
    "traditionalWithSetter": "default_fromsetter",
    "promoted": "default",
    "promotedWithSetter": "default_fromsetter"
}
```

expected output:
```json
{
    "traditional": "default",
    "traditionalWithSetter": "default",
    "promoted": "default",
    "promotedWithSetter": "default"
}
```
