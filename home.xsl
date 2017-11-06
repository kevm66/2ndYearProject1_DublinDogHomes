<?xml version="1.0" encoding="UTF-8" ?>
<xsl:transform xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <!--Name-->
  <xsl:template match="/">
    <xsl:for-each select="homes/home">
      <div style="background-color:#BFBFBF;">
        <h1 style="background-color:teal;color:white;padding:4px">
            Home Owner Name: <xsl:value-of select="name"/>
        </h1>
        <p>About Me:
          <xsl:value-of select="description" />
        </p>
        <p>Location:
          <xsl:value-of select="location" />
        </p>
        <p>My Home:
          <xsl:value-of select="homedesc" />
        </p>

        <p>Small Dogs:
          <xsl:value-of select="smalldogs" />
        </p>
        <p>Large Dogs:
          <xsl:value-of select="largedogs" />
        </p>
      </div>
    </xsl:for-each>
  </xsl:template>
</xsl:transform>