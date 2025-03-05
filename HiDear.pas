PROGRAM HiDear(INPUT, OUTPUT);
USES
  GPC;
VAR
  QueryString, Name: STRING;
  PosName: INTEGER;
BEGIN
  QueryString := GetEnv('QUERY_STRING');  
  WRITELN(GetEnv('CONTENT_TYPE'));
  WRITELN;
  WRITE('Hello ');
  PosName := Pos('name=', QueryString);
  IF PosName > 0
  THEN
    BEGIN
      Name := Copy(QueryString, 6, Length(QueryString) - 4);
      WRITE('dear, ', Name, '!');
    END
  ELSE
    WRITELN('Anonymous!');
END.
