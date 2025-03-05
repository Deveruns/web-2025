PROGRAM SarahRever(INPUT, OUTPUT);
USES
  GPC;
VAR
  QueryString: STRING;
BEGIN
  QueryString := GetEnv('QUERY_STRING');
  
  WRITELN(GetEnv('CONTENT_TYPE'));
  WRITELN;
  IF QueryString = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    BEGIN
      IF QueryString = 'lanterns=2'
      THEN
        WRITELN('The British are coming by sea.')
      ELSE
        WRITELN('Sarah didn''t say')
    END;
   WRITELN(QueryString) 
END.
